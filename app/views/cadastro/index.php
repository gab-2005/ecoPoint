<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Eco Point</title>

    <link rel="shortcut icon" href="/ecoPoint/public/imagens/icone.ico" type="image/x-icon">
    <link rel="stylesheet" href="/ecoPoint/public/css/pages/cadastro.css">
    <link rel="stylesheet" href="/ecoPoint/public/css/acesibfeedback.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

<main class="cadastro-wrapper">

    <section class="cadastro-imagem"></section>

    <section class="cadastro-formulario">
        <form action="/ecoPoint/cadastro/salvar" method="POST" id="formCadastro">

            <!-- PESSOAL -->
            <h2 class="titulos"><i class="fa-solid fa-id-card"></i> Informações pessoais</h2>

            <section class="grupo-campos">

                <div class="campo">
                    <label for="nomecompleto">Nome completo</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" id="nomecompleto" name="nome">
                    </div>
                </div>

                <div class="campo">
                    <label for="datanascimento">Data de nascimento</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-cake-candles"></i>
                        <input type="date" id="datanascimento" name="nascimento">
                    </div>
                </div>
                <div class="campo">
                    <label for="cpf">CPF</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-address-card"></i>
                        <input type="text" id="cpf" name="cpf">
                    </div>
                </div>

            </section>

            <!-- COMPLEMENTAR -->
            <h2 class="titulos">Informações complementares</h2>

            <section class="grupo-campos">

                <div class="campo">
                    <label for="cep">CEP</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-map-pin"></i>
                        <input type="text" id="cep" name="cep">
                    </div>
                </div>

                <div class="campo campo-botao">
                    <label class="label-fake">CEP</label>
                <button type="button" id="buscar">Buscar CEP</button>
            </div>


                

                <div class="campo">
                    <label for="rua">Endereço</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-road"></i>
                        <input type="text" id="rua" name="endereco" readonly>
                    </div>
                </div>

                <div class="campo">
                    <label for="bairro">Bairro</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-tree-city"></i>
                        <input type="text" id="bairro" name="bairro" readonly>
                    </div>
                </div>

                <div class="campo">
                    <label for="cidade">Cidade</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-city"></i>
                        <input type="text" id="cidade" name="cidade" readonly>
                    </div>
                </div>

                <div class="campo">
                    <label for="num">Número</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-hashtag"></i>
                        <input type="text" id="num" name="numero">
                    </div>
                </div>

                <div class="campo">
                    <label for="complemento">Complemento</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-building"></i>
                        <input type="text" id="complemento" name="complemento">
                    </div>
                </div>

                <div class="campo">
                    <label for="tel">Telefone</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-phone"></i>
                        <input type="text" id="tel" name="telefone">
                    </div>
                </div>

            </section>

            <!-- ACESSO -->
            <h2 class="titulos">Informações de acesso</h2>

            <section class="grupo-campos">

                <div class="campo">
                    <label for="campousuario">Usuário</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-user-tag"></i>
                        <input type="text" id="campousuario" name="login">
                    </div>
                </div>
                  <div class="campo">
                    <label for="inserirEmail">Email</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" id="inserirEmail" name="email">
                    </div>
                </div>

                <div class="campo">
                    <label for="camposenha">Senha</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-key"></i>
                        <input type="password" id="camposenha" name="senha">
                    </div>
                </div>

                <div class="campo">
                    <label for="confirmasenha">Confirmar senha</label>
                    <div class="input-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                        <input type="password" id="confirmasenha" name="confirmasenha">
                    </div>
                </div>

            </section>

            <section class="botoes">
                <a class="btn-voltar" onclick="window.location.href='<?= BASE_URL ?>/home'">
                    <i class="fa-solid fa-arrow-left"></i> Voltar
                </a>

                <a href="#" class="btn-submit" id="btnCadastrar">
                    Cadastrar <i class="fas fa-arrow-right"></i>
                </a>


               
            </section>

        </form>
    </section>

</main>

<script src="/ecoPoint/public/js/validacaocadastro.js"></script>

</body>
</html>
