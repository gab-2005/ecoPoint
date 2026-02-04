<?php

class AuthMiddleware
{
    public static function verificar()
    {
        // Rotas que NÃO precisam de login
        $rotasPublicas = ['login', 'cadastro', 'senha'];

        // Se não houver URL, assume login como padrão
        $url = $_GET['url'] ?? 'login';
        $controllerAtual = strtolower(explode('/', $url)[0]);

        if (!isset($_SESSION['usuario'])) {
            if (!in_array($controllerAtual, $rotasPublicas)) {
                header('Location: ' . BASE_URL . '/login');
                exit;
            }
        }
    }
}
