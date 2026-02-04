<?php

require_once __DIR__ . '/../DAO/quizDAO.php';

header('Content-Type: application/json; charset=utf-8');

$quizDAO = new QuizDAO();
$perguntas = $quizDAO->buscarPerguntasQuiz(7);

if (empty($perguntas)) {
    http_response_code(404);
    echo json_encode(['error' => 'Nenhuma pergunta encontrada']);
    exit;
}

echo json_encode($perguntas, JSON_UNESCAPED_UNICODE);
