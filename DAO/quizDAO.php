<?php
require_once(__DIR__ . '/conexao.php');

class QuizDAO {

    private $conexao;

    public function __construct() {
        $this->conexao = Conexao::getConexao();
    }

    public function buscarPerguntasQuiz($limite = 5) {

        $sqlPerguntas = "SELECT id FROM perguntas ORDER BY RAND() LIMIT :limite";
        $stmtPerguntas = $this->conexao->prepare($sqlPerguntas);
        $stmtPerguntas->bindParam(':limite', $limite, PDO::PARAM_INT);
        $stmtPerguntas->execute();

        $ids = $stmtPerguntas->fetchAll(PDO::FETCH_COLUMN);
        if (!$ids) return [];

        $placeholders = implode(',', array_fill(0, count($ids), '?'));

        $sql = "
            SELECT 
                p.id AS pergunta_id,
                p.texto AS pergunta,
                a.texto AS alternativa,
                a.correta
            FROM perguntas p
            JOIN alternativas a ON a.pergunta_id = p.id
            WHERE p.id IN ($placeholders)
            ORDER BY FIELD(p.id, " . implode(',', $ids) . ")
        ";

        $stmt = $this->conexao->prepare($sql);
        foreach ($ids as $i => $id) {
            $stmt->bindValue($i + 1, $id, PDO::PARAM_INT);
        }
        $stmt->execute();

        $dados = [];
        foreach ($stmt->fetchAll() as $row) {
            $id = $row['pergunta_id'];
            if (!isset($dados[$id])) {
                $dados[$id] = [
                    'question' => $row['pergunta'],
                    'answers' => []
                ];
            }
            $dados[$id]['answers'][] = [
                'text' => $row['alternativa'],
                'correct' => (bool)$row['correta']
            ];
        }

        // Embaralha as alternativas de cada pergunta
        foreach ($dados as &$pergunta) {
            shuffle($pergunta['answers']);
        }

        return array_values($dados);
    }
}
