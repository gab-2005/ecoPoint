<?php

require_once __DIR__ . '/../models/usuario.php';
require_once __DIR__ . '/../../DAO/usuarioDAO.php';
require_once __DIR__ . '/../../DAO/pontoColetaDAO.php';
require_once __DIR__ . '/../middleware/AuthMiddleware.php';

class MapaController extends Controller {

    public function __construct() {
        AuthMiddleware::verificar();
    }

    public function index() {
        $this->view('mapa/index');
    }

    public function cadastrarPonto() {

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return;
        }

        // =========================
        // Captura dados do formulário
        // =========================
        $nome        = trim($_POST['nome'] ?? '');
        $observacao  = trim($_POST['observacao'] ?? '');
        $cep         = trim($_POST['cep'] ?? '');
        $endereco    = trim($_POST['endereco'] ?? '');
        $numero      = trim($_POST['numero'] ?? '');
        $complemento = trim($_POST['complemento'] ?? '');
        $bairro      = trim($_POST['bairro'] ?? '');
        $cidade      = trim($_POST['cidade'] ?? '');
        $estado      = trim($_POST['estado'] ?? '');

        $usuario_id = $_SESSION['usuario']['id'] ?? null;

        // =========================
        // Validação
        // =========================
        if (!$usuario_id) {
            echo "<script>alert('Sessão expirada. Faça login novamente.'); window.location.href='/login';</script>";
            return;
        }

        if (!$nome || !$cep || !$endereco || !$numero || !$bairro || !$cidade || !$estado) {
            echo "<script>alert('Preencha todos os campos obrigatórios.'); window.history.back();</script>";
            return;
        }

        // =========================
        // Monta endereço completo
        // =========================
        $enderecoCompleto = "$endereco, $numero, $bairro, $cidade, $estado";

        // =========================
        // Busca coordenadas
        // =========================
        $latitude = null;
        $longitude = null;

        $coordenadas = $this->obterCoordenadas($enderecoCompleto);

        if ($coordenadas) {
            $latitude = $coordenadas['lat'];
            $longitude = $coordenadas['lon'];
        }

        // =========================
        // Insere no banco
        // =========================
        try {

            $pdo = Conexao::getConexao();

            $stmt = $pdo->prepare("
                INSERT INTO pontos_coleta 
                (usuario_id, nome, observacao, cep, endereco, numero, complemento, bairro, cidade, estado, situacao, latitude, longitude) 
                VALUES 
                (:usuario_id, :nome, :observacao, :cep, :endereco, :numero, :complemento, :bairro, :cidade, :estado, 'pendente', :latitude, :longitude)
            ");

            $stmt->bindValue(':usuario_id', $usuario_id);
            $stmt->bindValue(':nome', $nome);
            $stmt->bindValue(':observacao', $observacao);
            $stmt->bindValue(':cep', $cep);
            $stmt->bindValue(':endereco', $endereco);
            $stmt->bindValue(':numero', $numero);
            $stmt->bindValue(':complemento', $complemento);
            $stmt->bindValue(':bairro', $bairro);
            $stmt->bindValue(':cidade', $cidade);
            $stmt->bindValue(':estado', $estado);
            $stmt->bindValue(':latitude', $latitude);
            $stmt->bindValue(':longitude', $longitude);

            $stmt->execute();

            echo "<script>
                alert('Ponto de coleta enviado para análise. Obrigado por ajudar na reciclagem eletrônica!');
                window.history.back();
            </script>";

        } catch (Exception $e) {

            echo "<script>
                alert('Erro ao cadastrar ponto de coleta.');
                window.history.back();
            </script>";
        }
    }

    // =========================
    // API - Buscar Coordenadas
    // =========================
    private function obterCoordenadas($endereco) {

        $url = "https://nominatim.openstreetmap.org/search?" . http_build_query([
            'q' => $endereco,
            'format' => 'json',
            'limit' => 1
        ]);

        $opts = [
            "http" => [
                "header" => "User-Agent: EcoPoint/1.0\r\n"
            ]
        ];

        $context = stream_context_create($opts);
        $response = @file_get_contents($url, false, $context);

        if (!$response) {
            return null;
        }

        $data = json_decode($response, true);

        if (!empty($data[0])) {
            return [
                'lat' => $data[0]['lat'],
                'lon' => $data[0]['lon']
            ];
        }

        return null;
    }
}

?>
