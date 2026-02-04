<?php

// Carrega a classe base de Controller (MVC)
require_once 'app/core/Controller.php';

// Carrega o middleware de autenticação
require_once 'app/middleware/AuthMiddleware.php';

class App {

    // Controller inicial (definido dinamicamente)
    protected $controller;

    // Método padrão do controller
    protected $method = 'index';

    // Parâmetros da URL
    protected $params = [];

    public function __construct() {

        // ===============================
        // 1️⃣ Middleware de autenticação
        // ===============================
        // Bloqueia acesso a rotas privadas se o usuário não estiver logado
        AuthMiddleware::verificar();

        // ==========================================
        // 2️⃣ Define controller padrão dinamicamente
        // ==========================================
        // Se o usuário estiver logado → HOME
        // Se não estiver logado → LOGIN
        if (isset($_SESSION['usuario'])) {
            $this->controller = 'HomeController';
        } else {
            $this->controller = 'LoginController';
        }

        // ===============================
        // 3️⃣ Processa a URL (roteamento)
        // ===============================
        $url = $this->parseURL();

        // ===============================
        // 4️⃣ Controller vindo da URL
        // ===============================
        // Se existir algo como /home, /sobre, /mapa...
        if (isset($url[0])) {
            $controllerArquivo = 'app/controllers/' . ucfirst($url[0]) . 'Controller.php';

            // Se o controller existir fisicamente
            if (file_exists($controllerArquivo)) {
                $this->controller = ucfirst($url[0]) . 'Controller';
                unset($url[0]); // Remove da URL
            }
        }

        // ===============================
        // 5️⃣ Carrega o controller final
        // ===============================
        require_once 'app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // ===============================
        // 6️⃣ Método vindo da URL
        // ===============================
        // Ex: /login/autenticar
        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        // ===============================
        // 7️⃣ Parâmetros restantes da URL
        // ===============================
        // Ex: /usuario/editar/10
        $this->params = $url ? array_values($url) : [];

        // ===============================
        // 8️⃣ Executa controller + método
        // ===============================
        call_user_func_array(
            [$this->controller, $this->method],
            $this->params
        );
    }

    // ======================================
    // Função responsável por quebrar a URL
    // ======================================
    private function parseURL() {
        if (isset($_GET['url'])) {
            return explode(
                '/',
                filter_var(
                    rtrim($_GET['url'], '/'),
                    FILTER_SANITIZE_URL
                )
            );
        }
        return [];
    }
}
