<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco Point - Login</title>

    <link rel="shortcut icon" href="/ecoPoint/public/imagens/icone.ico">

    <!-- CSS -->
    <link rel="stylesheet" href="/ecoPoint/public/css/pages/login.css">
    <link rel="stylesheet" href="/ecoPoint/public/css/acesibfeedback.css">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>
    <div class="login-wrapper">

    <!-- ÁREA DO FORMULÁRIO -->
    <section class="login-form-area">

    <form action="/ecoPoint/login/autenticar"
      method="POST"
      autocomplete="on"
      novalidate
      class="form">

    <!-- TÍTULO -->
    <div class="form-titulo">
        <h1 class="titulo-login">Bem-vindo</h1>
        <p class="subtitulo-login">
            Você está prestes a continuar algo importante. A EcoPoint existe para transformar
            consciência ambiental em ação prática. Ao acessar sua conta, você segue ajudando
            a reduzir impactos ambientais e a construir um futuro mais equilibrado.
        </p>
    </div>

    <!-- FORMULÁRIO -->
    <div class="form-conteudo">

        <!-- CAMPOS -->
        <div class="form-campos">
            <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text"
                       name="login"
                       id="usuario"
                       placeholder="Usuário"
                       maxlength="8">
            </div>

            <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password"
                       name="senha"
                       id="senha"
                       placeholder="Senha"
                       minlength="6"
                       maxlength="10">
            </div>
        </div>

        <!-- MENSAGEM -->
         <div class="grupo-mensagem">
            <div id="mensagemErro" class="mensagem-erro">
                <?php
                if (isset($_SESSION['erro_login'])) {
                    echo $_SESSION['erro_login'];
                    unset($_SESSION['erro_login']);
                }
                ?>
            </div>
        </div>

       

        <!-- BOTÕES -->
        <div class="form-botoes">
            <a id="botao-entrar">
                Entrar <i class="fas fa-arrow-right"></i>
            </a>

            <a id="botao-criar-conta"
               onclick="window.location.href='<?= BASE_URL ?>/cadastro'">
                Criar conta
            </a>
        </div>

        <!-- LINKS -->
        <div class="form-links">
            <a href="<?= BASE_URL ?>/senha">Esqueci minha senha</a>
        </div>

    </div>

    <!-- DESENVOLVEDORES -->
    <div class="form-dev">
        <h3 class="titulo-dev">Desenvolvido por</h3>

        <div class="dev-integrantes">
            <div class="dev-card">
                <img src="/ecoPoint/public/imagens/imgAuth.jpg">
                <span>Gabriel Araújo</span>
            </div>

            <div class="dev-card">
                <img src="/ecoPoint/public/imagens/imgAuth.jpg">
                <span>Alessandra</span>
            </div>

            <div class="dev-card">
                <img src="/ecoPoint/public/imagens/imgAuth.jpg">
                <span>Eric</span>
            </div>

            <div class="dev-card">
                <img src="/ecoPoint/public/imagens/imgAuth.jpg">
                <span>Bryan</span>
            </div>
        </div>
    </div>

</form>


     

    </section>

    <!-- ÁREA DA IMAGEM -->
    <section class="login-imagem"></section>

</div>





<script src="/ecoPoint/public/js/validacaologin.js"></script>
<script src="/ecoPoint/public/js/acessibfeedback.js"></script>

</body>
</html>
