<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa - Eco Point</title>

  
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" /> <!--Inclui o CSS do Leaflet, onde Leaflet é uma biblioteca JavaScript de código aberto que permite a criação de aplicativos de mapeamento virtuais-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">


    <!-- CSS -->

    <!-- FONT AWESOME -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <Style>
        /* ========================================================= */
/* RESET + BASE */
/* ========================================================= */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html, body {
    width: 100%;
    height: 100%;
    font-family: 'Inter', sans-serif;
    background-color: #f4f7f6;
    color: #1f2933;
}

/* ========================================================= */
/* HEADER */
/* ========================================================= */
header {
    width: 100%;
    height: 70px;
    background: #0f766e;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 40px;
}

#logo {
    height: 42px;
}

nav a {
    color: #e6fffa;
    text-decoration: none;
    margin: 0 12px;
    font-weight: 500;
}

nav a.selecionado {
    border-bottom: 2px solid #5eead4;
}

nav a:hover {
    opacity: 0.85;
}

/* ========================================================= */
/* CONTEÚDO PRINCIPAL */
/* ========================================================= */
main.conteudo {
    width: 100%;
    padding: 40px 0;
}

/* ========================================================= */
/* SECTION MAPA */
/* ========================================================= */
#mapa {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

#mapa h1 {
    font-size: 2.2rem;
    margin-bottom: 10px;
    color: #065f46;
}

#mapa p {
    margin-bottom: 20px;
    line-height: 1.6;
    color: #374151;
}

/* ========================================================= */
/* MAPA LEAFLET */
/* ========================================================= */
#map {
    width: 100%;
    height: 450px;
    border-radius: 12px;
    border: 2px solid #99f6e4;
    margin-bottom: 40px;
    z-index: 1;
}

/* ========================================================= */
/* FORMULÁRIO */
/* ========================================================= */
.cadastro {
    display: flex;
    justify-content: center;
}

#caixa {
    background: #ffffff;
    width: 100%;
    max-width: 520px;
    padding: 30px;
    border-radius: 14px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
}

#caixa h2 {
    font-size: 1.4rem;
    color: #065f46;
    margin-bottom: 10px;
}

#caixa h3 {
    font-size: 1rem;
    margin-bottom: 20px;
    color: #047857;
}

/* ========================================================= */
/* INPUTS */
/* ========================================================= */
#caixa input,
#caixa textarea {
    width: 100%;
    padding: 12px;
    margin-bottom: 12px;
    border-radius: 8px;
    border: 1px solid #d1fae5;
    font-size: 0.95rem;
}

#caixa input:focus,
#caixa textarea:focus {
    outline: none;
    border-color: #14b8a6;
}

/* ========================================================= */
/* CEP */
/* ========================================================= */
.cep {
    display: flex;
    gap: 10px;
}

#buscar {
    background: #14b8a6;
    color: #ffffff;
    border: none;
    border-radius: 8px;
    padding: 0 18px;
    cursor: pointer;
}

#buscar:hover {
    background: #0d9488;
}

/* ========================================================= */
/* NÚMERO + COMPLEMENTO */
/* ========================================================= */
.numero-complemento {
    display: flex;
    gap: 10px;
}

/* ========================================================= */
/* BOTÃO SUBMIT */
/* ========================================================= */
#caixa button[type="submit"] {
    width: 100%;
    background: #0f766e;
    color: #ffffff;
    border: none;
    padding: 14px;
    border-radius: 10px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    margin-top: 10px;
}

#caixa button[type="submit"]:hover {
    background: #065f46;
}

/* ========================================================= */
/* FOOTER */
/* ========================================================= */
footer {
    background: #064e3b;
    color: #d1fae5;
    padding: 40px 20px;
    margin-top: 60px;
}

.footer-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.footer-container h3 {
    margin-bottom: 10px;
}

.lista {
    list-style: none;
}

.nome {
    margin-bottom: 6px;
}

.contact-item {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 6px;
}

/* ========================================================= */
/* RESPONSIVO */
/* ========================================================= */
@media (max-width: 768px) {
    header {
        flex-direction: column;
        height: auto;
        padding: 20px;
    }

    nav {
        margin-top: 10px;
    }

    #map {
        height: 320px;
    }

    .numero-complemento {
        flex-direction: column;
    }

    .footer-container {
        flex-direction: column;
        gap: 30px;
    }
}

        
    </Style>

</head>
<body>
    <header>
         <img src="./public/imagens/logo-ecopoint-white.png" alt="logo do ecopoint" id="logo">
        <nav>
            <div id="borda-menu">
                <a href="<?= BASE_URL ?>/sobre" class="link ">Sobre Nós</a>
                <a href="<?= BASE_URL ?>/Informacoes" class="link ">Informações</a>
                <a href="<?= BASE_URL ?>/ongs" class="link ">Ong's</a>
                <a href="<?= BASE_URL ?>/mapa" class="link selecionado ">Mapa</a>

                <div class="user-dropdown">
                    <a class="user-button">
                        <i class="bi bi-person-fill-check"></i>
                        <?php echo htmlspecialchars($_SESSION['usuario']['login']); ?>
                        <i class="bi bi-caret-down-fill"></i>
                    </a>
                    <div class="user-submenu">
                        <a href="/ecoPoint/app/views/editar/editar_perfil.php"><i class="bi bi-pencil-fill"></i> Editar Perfil</a>
                        <a href="/ecoPoint/logout"><i class="bi bi-box-arrow-in-left"></i> Logout</a>
                        
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="conteudo">
    
        <section id="mapa">
            <h1>Mapa</h1>
            <p>Para aqueles que se interessam mais pelo assunto e desejam fazer a diferença, disponibilizamos um mapa com os locais que recebem ou coletam lixo eletrônico no Rio de Janeiro.</p>
            <div id="map"></div>
            <!--Inclui o JS do Leaflet-->
            <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
         
            <form action="<?= BASE_URL ?>/mapa/cadastrarPonto" method="POST" id="formColeta" name="formulariocoleta" onsubmit="validarPontocoleta(event)">
                <div class="cadastro">
                    <div id="caixa">
                        <h2>Conhece outro ponto de coleta? Adicione aqui!</h2>
                        <h3>Informações do Local</h3>
                        <input type="text" placeholder="Nome do ponto:" id="nome" name="nome" maxlength="80" required>
                        <div class="cep">
                            <input type="text" id="cep" name="cep" placeholder="CEP: 00000-000" required oninput="formatarCEP(this)">
                            <button type="button" id="buscar">Buscar</button>
                        </div>

                        <input type="text" id="rua" name="endereco" placeholder="Endereço:" readonly>
                        <input type="text" id="bairro" name="bairro" placeholder="Bairro:" readonly>
                        <input type="text" id="cidade" name="cidade" placeholder="Cidade:" readonly>
                        <input type="text" id="estado" name="estado" placeholder="Estado:" readonly>

                        <div class="numero-complemento">
                            <input type="text" id="num" name="numero" placeholder="Número:">
                            <input type="text" id="complemento" name="complemento" placeholder="Complemento:">
                        </div>

                        <textarea name="observacao" placeholder="Observação (opcional)" rows="3" cols="40"></textarea>

                        <button type="submit">Cadastrar ponto</button>
                        <div id="mensagem-resultado"></div>
                    </div>
                </div>
            </form>
            <br>
            <p>Para mais informações sobre os pontos indicados e outros locais de reciclagem eletrônica, entre em contato conosco ou acesse o site da Comlubr.</p>
            <p>https://comlurb.prefeitura.rio/servico/coleta-seletiva/onde-descartar-materiais-que-nao-sao-coletados/</p>
            <p>https://www.curitiba.pr.gov.br/servicos/ecopontos-descarte-correto-de-residuos/716</p>
            <p>https://www.seteambiental.com.br/pevs/</p>
            <br>
            <br>
        </section>
        <br>
        <br>

    </main>
    <footer>
        <div class="footer-container">
            <div>
                <h3 class="integrantes">Integrantes</h3>
                <ul class="lista">
                <li class="nome">Alessandra Cristina da Silva Pereira</li>
                    <li class="nome">Bryan Caristiati Costa</li>
                    <li class="nome">Eric Luiz Xavier de Araujo</li>
                    <li class="nome">Daniel Jesus Dias Alves</li>
                    <li class="nome">Gabriel Araújo de Oliveira</li>
                </ul>
            </div>
            <div class="contatos">
                <h3 class="contatos">Contatos</h3>
                <div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>(21) 96444-3878</span> 
                    </div>
                    <div class="contact-item">
                        <i class="fab fa-instagram"></i>
                        <span>@ecopoint_recicle</span> 
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>ecopointverde@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Menu de Acessibilidade-->
    <div id="menu-acessibilidade" class="menu-acessibilidade">
        <div class="btnAbre" onclick="toggleAcessMenu()">
        <span class="material-symbols-outlined">accessible_forward</span>
        </div>
        <div id="painel-acessibilidade" class="painel-acessibilidade">
            <button id="increaseFont">Aumentar Fonte</button>
            <button id="decreaseFont">Diminuir Fonte</button>
            <button onclick="mudarContraste()">Alterar Contraste</button>
            <button onclick="lerConteudo()">Ler Conteúdo</button>
            <button onclick="pararLeitura()">Parar Leitura</button>
            <br>
            <label for="feedback">Feedback de acessibilidade:</label>
            <textarea id="feedback" rows="4" placeholder="Tem um problema de acessibilidade? Nós de um Feedback"></textarea>
            <button onclick="enviarFeedbackAceb()">Enviar Feedback</button>
        </div>
    </div>
    <!--Menu de Feedback-->
    <div id="menu-feedback" class="menu-feedback">
        <div class="btnFeedback" onclick="toggleFeedbackMenu()">
        <span class="material-symbols-outlined">feedback</span>
        </div>
        <div id="painel-feedback" class="painel-feedback">
            <h3>Deixe seu Feedback</h3>
            <p>Nosso site visa a mudança, nada melhor do que você nós ajudar de pertinho.
            Abaixo escreva um feedback sobre nosso site e sua experiência dentro dele.
            Não se esqueça, pode fazer isso quando e quantas vezes quiser!!</p>
            <textarea id="feedback-text" rows="5" placeholder="Digite aqui seu feedback..."></textarea>
            <button onclick="enviarFeedback()">Enviar Feedback</button>
        </div>
    </div>
    <script src="/ecoPoint/public/js/acessibfeedback.js"></script> <!--Código JS do painel de acessibilidade e da caixa de feedback-->
    <script src="/ecoPoint/public/js/validacaopontocoleta.js"></script> <!--Código JS do cadastro de ponto de coleta-->
</body>
</html>