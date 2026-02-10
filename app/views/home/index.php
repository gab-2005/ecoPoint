<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- ========================================================= -->
    <!-- META CONFIG -->
    <!-- ========================================================= -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco Point - Home</title>

    <!-- ========================================================= -->
    <!-- FONTS -->
    <!-- ========================================================= -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- ========================================================= -->
    <!-- CSS -->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/main.css">

    <!-- ========================================================= -->
    <!-- FONT AWESOME -->
    <!-- ========================================================= -->

    <!-- ========================================================= -->
    <!-- LEAFLET CSS -->
    <!-- ========================================================= -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
</head>

<script>
    const mobileToggle = document.querySelector('.mobile-menu-toggle');
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('active');
        mobileToggle.classList.toggle('active');
    });

    // Fecha o menu ao clicar em algum link
    document.querySelectorAll('.mobile-item').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            mobileToggle.classList.remove('active');
        });
    });
</script>


<body>

    <!-- ========================================================= -->
    <!-- FUNDO VERDE -->
    <!-- ========================================================= -->
    <div class="conteiner-green">

        <!-- ================= HEADER ================= -->
        <header class="eco-header">
            <div class="eco-container eco-header-container">

                <!-- LOGO -->
                <div class="eco-logo">
                    <img src="./public/imagens/logo-ecopoint-dark.png" alt="Eco Point">
                    <span>Eco Point</span>
                </div>

                <!-- NAV -->
                <nav class="eco-nav">
                    <a href="#home" class="eco-link">Home</a>
                    <a href="#mapa" class="eco-link">mapa</a>
                    <a href="#videos" class="eco-link">Vídeos</a>
                    <a href="#noticias" class="eco-link">Notícias</a>
                </nav>

                <!-- USER DROPDOWN -->

                <div class="user-menu">

                    <!-- BOTÃO PRINCIPAL (LOGIN DO USUÁRIO) -->
                    <a class="menu-item menu-toggle" type="button">
                        <i class="fa-solid fa-user"></i>
                        <span class="user-name">
                            <?php echo htmlspecialchars($_SESSION['usuario']['login']); ?>
                        </span>
                        <i class="fa-solid fa-chevron-down menu-arrow"></i>

                    </a>

                    <!-- LISTA -->
                    <div class="menu-list">
                        <a href="/ecoPoint/app/views/editar/editar_perfil.php" class="menu-item">
                            <i class="fa-solid fa-pen"></i>         <!-- Editar -->

                            <span>Editar</span>
                        </a>

                        <a href="/ecoPoint/logout" class="menu-item logout">
                            <i class="fa-solid fa-right-from-bracket"></i> <!-- Logout -->

                            <span>Logout</span>
                        </a>

                    </div>
                </div>


                    

               

            </div>
        </header>

        <script>
document.addEventListener("DOMContentLoaded", function () {

    const menu = document.querySelector(".user-menu");
    const toggle = document.querySelector(".menu-toggle");

    toggle.addEventListener("click", function () {
        menu.classList.toggle("active");
    });

});
</script>


 


     


        <!-- ================= HERO ================= -->
        <section class="eco-hero" id="home">
            <div class="eco-container eco-hero-container">

                <!-- HERO TEXTO -->
                <div class="eco-hero-text">

                    <span class="eco-hero-eyebrow">
                        <i class="fas fa-recycle"></i>
                        Plataforma de conscientização ambiental
                    </span>

                    <h1 class="eco-hero-title">
                        Tecnologia a favor do nosso planeta
                    </h1>

                    <p class="eco-hero-subtitle">
                        Promovendo soluções responsáveis para o descarte eletrônico,
                        educação ambiental e impacto positivo na sociedade.
                    </p>

                    <div class="eco-hero-actions">
                        <a href="#quiz" class="eco-hero-btn primary">
                            Mapa
                            <i class="fas fa-arrow-right"></i>
                        </a>

                        <a href="#noticias" class="eco-hero-btn secondary">
                            Notícias
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                    <ul class="eco-hero-features">
                        <li><i class="fas fa-seedling"></i> Reciclagem consciente</li>
                        <li><i class="fas fa-book"></i> Educação ambiental</li>
                        <li><i class="fas fa-hands-helping"></i> Impacto social</li>
                    </ul>

                </div>

                <!-- QUIZ -->
                <div class="eco-hero-quiz">
                    <div class="quiz-card">

                        <div class="quiz-header">
                            <div class="quiz-progress-indicator">
                                <span class="current-question">0</span> /
                                <span class="total-questions">0</span>
                            </div>
                        </div>

                        <div class="quiz-content">

                            <!-- INTRO -->
                            <div class="quiz-state quiz-intro active">
                                <div class="quiz-body">

                                    <h2 class="quiz-title">
                                        <span>Quiz</span>
                                        <span class="eco-green">Eco</span>
                                        <span>Point</span>
                                    </h2>

                                    <p class="quiz-description">
                                        Explore seus conhecimentos sobre reciclagem eletrônica,
                                        entenda o impacto do descarte consciente e descubra como
                                        pequenas atitudes geram grandes mudanças.
                                    </p>

                                </div>

                                <div class="quiz-footer">
                                    <a class="quiz-btn quiz-btn-primary start-quiz">
                                        <span>Iniciar Quiz</span>
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- QUESTIONS -->
                            <div class="quiz-state quiz-questions">
                                <div class="quiz-body">
                                    <div class="question-wrapper">
                                        <h3 class="question-text"></h3>
                                        <div class="answers-container"></div>
                                    </div>
                                </div>

                                <div class="quiz-footer quiz-navigation">
                                    <a class="quiz-btn quiz-btn-secondary prev-question">
                                        <i class="fas fa-arrow-left"></i>
                                        <span>Voltar</span>
                                    </a>

                                    <a class="quiz-btn quiz-btn-primary next-question disabled">
                                        <span>Próxima</span>
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- RESULT -->
                            <div class="quiz-state quiz-result">
                                <div class="quiz-body">

                                    <div class="result-icon-wrapper">
                                        <i class="fas fa-trophy result-icon"></i>
                                    </div>

                                    <div class="result-score">
                                        <span class="score-value">0</span>
                                        <span class="score-total">/ 0</span>
                                    </div>

                                    <div class="result-percentage">0%</div>
                                    <p class="result-message"></p>

                                </div>

                                <div class="quiz-footer">
                                    <a class="quiz-btn quiz-btn-primary restart-quiz">
                                        
                                        <span>Refazer Quiz</span>
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <!-- ========================================================= -->
    <!-- FONT AWESOME (REPETIDO ORIGINALMENTE — MANTIDO) -->
    <!-- ========================================================= -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- ========================================================= -->
    <!-- NOTÍCIAS -->
    <!-- ========================================================= -->
     <section class="sessao-noticias" id="noticias">
    <div class="eco-container-noticias">
        <div class="parent">

            <!-- NOTÍCIA DESTAQUE -->
            <article class="div1 noticia destaque">
                <a href="https://oeco.org.br/noticias/producao-mundial-de-lixo-eletronico-e-cinco-vezes-maior-do-que-sua-reciclagem-diz-onu/"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="card-link">
                    e
                    <img src="" alt="">
                    <div class="conteudo">
                        <span class="tag">Destaque</span>
                        <h2>Lixo eletrônico cresce de forma alarmante</h2>
                        <p>
                            A produção de lixo eletrônico cresce muito mais rápido do que sua reciclagem no mundo.
                        </p>
                        <span class="saiba-mais">
                            Saiba mais <i class="fas fa-arrow-right"></i>
                        </span>
                    </div>
                </a>
            </article>

            <!-- NOTÍCIA 2 -->
            <article class="div2 noticia">
                <a href="https://faleitolevebh.com.br/noticias/brasil/para-49-dos-brasileiros-lixo-eletronico-e-o-que-mais-gera-duvidas-quanto-ao-descarte-mostra-pesquisa/"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="card-link">
                    <img src="" alt="">
                    <div class="conteudo">
                        <span class="tag">Tecnologia</span>
                        <h3>Reciclagem de baterias</h3>
                        <p>Dúvidas sobre descarte correto ainda são comuns no Brasil.</p>
                        <span class="saiba-mais">
                            Saiba mais <i class="fas fa-arrow-right"></i>
                        </span>
                    </div>
                </a>
            </article>

            <!-- NOTÍCIA 3 -->
            <article class="div3 noticia">
                <a href="https://noticias.ambientebrasil.com.br/clipping/2018/07/05/144606-brasileiros-criam-tecnologia-que-recicla-metais-preciosos-de-lixo-eletronico.html"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="card-link">
                    <img src="" alt="">
                    <div class="conteudo">
                        <span class="tag">Sustentabilidade</span>
                        <h3>Placas eletrônicas</h3>
                        <p>Metais preciosos podem ser recuperados do lixo eletrônico.</p>
                        <span class="saiba-mais">
                            Saiba mais <i class="fas fa-arrow-right"></i>
                        </span>
                    </div>
                </a>
            </article>

            <!-- NOTÍCIA 4 -->
            <article class="div4 noticia">
                <a href="https://oglobo.globo.com/economia/noticia/2025/02/17/no-brasil-reciclagem-atinge-so-33percent-dos-eletronicos.ghtml"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="card-link">
                    <img src="" alt="">
                    <div class="conteudo">
                        <span class="tag">Meio Ambiente</span>
                        <h3>Descarte consciente</h3>
                        <p>Apenas 3% dos eletrônicos são reciclados no Brasil.</p>
                        <span class="saiba-mais">
                            Saiba mais <i class="fas fa-arrow-right"></i>
                        </span>
                    </div>
                </a>
            </article>

        </div>
    </div>
</section>

<!-- ========================================================= -->
<!-- ONGS PARCEIRAS -->
<!-- ========================================================= -->
<section class="sessao-ongs" aria-labelledby="titulo-ongs">
    <div class="eco-container">

        <header class="section-header-ongs">
            <h2 class="section-title-ongs" id="titulo-ongs">ONGs Parceiras</h2>

            <p class="section-subtitle-ongs">
                Trabalhamos lado a lado com as organizações mais respeitadas do mundo
                para ampliar o impacto ambiental positivo, fortalecer a economia circular
                e garantir transformação real.
            </p>
        </header>

        <ul class="lista-ongs">

            <li class="ong-item">
                <img src="<?= BASE_URL ?>/public/imagens/imgReciclaSampa.png"
                     alt="Logo Recicla Sampa"
                     class="ong-logo">
            </li>

            <li class="ong-item">
                <img src="<?= BASE_URL ?>/public/imagens/imgGreenEletron.png"
                     alt="Logo E-Lixo"
                     class="ong-logo">
            </li>

            <li class="ong-item">
                <img src="<?= BASE_URL ?>/public/imagens/imgGea.png"
                     alt="Logo Instituto Jogue Limpo"
                     class="ong-logo">
            </li>

            <li class="ong-item">
                <img src="<?= BASE_URL ?>/public/imagens/imgProgramandoFuturo.png"
                     alt="Logo Eco Point"
                     class="ong-logo">
            </li>

            <li class="ong-item">
                <img src="<?= BASE_URL ?>/public/imagens/imgGreenEletron.png"
                     alt="Logo Recicla Sampa"
                     class="ong-logo">
            </li>

            <li class="ong-item">
                <img src="<?= BASE_URL ?>/public/imagens/imgEnvironmentalDefense.png"
                     alt="Logo Environmental Defense"
                     class="ong-logo">
            </li>

            <li class="ong-item">
                <img src="<?= BASE_URL ?>/public/imagens/imgCircularEconomyClub.png"
                     alt="Logo Circular Economy Club"
                     class="ong-logo">
            </li>

            <li class="ong-item">
                <img src="<?= BASE_URL ?>/public/imagens/imgSosMataAtlantica.png"
                     alt="Logo SOS Mata Atlântica"
                     class="ong-logo">
            </li>

        </ul>

    </div>
</section>

<!-- ========================================================= -->
<!-- VÍDEOS EDUCATIVOS -->
<!-- ========================================================= -->
<section class="sessao-videos" id="videos">
    <div class="eco-container">

        <div class="section-header">
            <div class="section-header-text">
                <h2 class="section-title">Aprenda sobre Reciclagem Eletrônica</h2>
            </div>

            <span class="section-eyebrow">
                <i class="fas fa-play-circle"></i>
                Conteúdo Educativo
            </span>
        </div>

        <div class="videos-grid">

            <!-- VIDEO 1 -->
            <div class="video-card">
                <div class="video-thumbnail">
                    <img src="<?= BASE_URL ?>/public/imagens/IntroduçãoReciclagem.png" alt="Vídeo 1">
                    <div class="play-overlay">
                        <i class="fas fa-play"></i>
                    </div>
                </div>

                <div class="video-content">
                    <h3>Introdução à Reciclagem Eletrônica</h3>
                    <p>Conheça os conceitos básicos sobre reciclagem de equipamentos eletrônicos</p>

                    <div class="video-meta">
                        <span><i class="fas fa-clock"></i> 5 min</span>
                        <span><i class="fas fa-eye"></i> 1.2k</span>
                    </div>
                </div>
            </div>

            <!-- VIDEO 2 -->
            <div class="video-card">
                <div class="video-thumbnail">
                    <img src="<?= BASE_URL ?>/public/imagens/impactoAmbiental.jpg" alt="Vídeo 2">
                    <div class="play-overlay">
                        <i class="fas fa-play"></i>
                    </div>
                </div>

                <div class="video-content">
                    <h3>Impacto Ambiental do Lixo Eletrônico</h3>
                    <p>Entenda como o descarte incorreto afeta o meio ambiente</p>

                    <div class="video-meta">
                        <span><i class="fas fa-clock"></i> 7 min</span>
                        <span><i class="fas fa-eye"></i> 890</span>
                    </div>
                </div>
            </div>

            <!-- VIDEO 3 -->
            <div class="video-card">
                <div class="video-thumbnail">
                    <img src="<?= BASE_URL ?>/public/imagens/ReciclarCelularTablet.jpg" alt="Vídeo 3">
                    <div class="play-overlay">
                        <i class="fas fa-play"></i>
                    </div>
                </div>

                <div class="video-content">
                    <h3>Como Reciclar Celulares e Tablets</h3>
                    <p>Passo a passo para reciclar seus dispositivos móveis corretamente</p>

                    <div class="video-meta">
                        <span><i class="fas fa-clock"></i> 6 min</span>
                        <span><i class="fas fa-eye"></i> 1.5k</span>
                    </div>
                </div>
            </div>

            <!-- VIDEO 4 -->
            <div class="video-card">
                <div class="video-thumbnail">
                    <img src="<?= BASE_URL ?>/public/imagens/PontoColeta.jpg" alt="Vídeo 4">
                    <div class="play-overlay">
                        <i class="fas fa-play"></i>
                    </div>
                </div>

                <div class="video-content">
                    <h3>Pontos de Coleta em Sua Cidade</h3>
                    <p>Descubra onde descartar seus equipamentos eletrônicos</p>

                    <div class="video-meta">
                        <span><i class="fas fa-clock"></i> 4 min</span>
                        <span><i class="fas fa-eye"></i> 2.1k</span>
                    </div>
                </div>
            </div>

            <!-- VIDEO 5 -->
            <div class="video-card">
                <div class="video-thumbnail">
                    <img src="<?= BASE_URL ?>/public/imagens/BenefícioReciclagem.jpg" alt="Vídeo 5">
                    <div class="play-overlay">
                        <i class="fas fa-play"></i>
                    </div>
                </div>

                <div class="video-content">
                    <h3>Benefícios da Reciclagem</h3>
                    <p>Conheça os benefícios ambientais e sociais da reciclagem</p>

                    <div class="video-meta">
                        <span><i class="fas fa-clock"></i> 8 min</span>
                        <span><i class="fas fa-eye"></i> 1.8k</span>
                    </div>
                </div>
            </div>

            <!-- VIDEO 6 -->
            <div class="video-card">
                <div class="video-thumbnail">
                    <img src="<?= BASE_URL ?>/public/imagens/EconomiaCircularSustentabilidade.jpg" alt="Vídeo 6">
                    <div class="play-overlay">
                        <i class="fas fa-play"></i>
                    </div>
                </div>

                <div class="video-content">
                    <h3>Economia Circular e Sustentabilidade</h3>
                    <p>Entenda o conceito de economia circular e sua importância</p>

                    <div class="video-meta">
                        <span><i class="fas fa-clock"></i> 10 min</span>
                        <span><i class="fas fa-eye"></i> 950</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ========================================================= -->
<!-- MAPA + CADASTRO DE PONTO -->
<!-- ========================================================= -->
<section id="mapa" class="sessao-mapa">
    <div class="eco-container">

        <header class="section-header">
            <h2 class="section-title">Pontos de Coleta de Lixo Eletrônico</h2>
            <p class="section-subtitle">
                Encontre locais próximos para descartar corretamente seus eletrônicos.
            </p>
        </header>

        <div class="mapa-layout">

            <!-- FORMULÁRIO -->
            <form action="<?= BASE_URL ?>/mapa/cadastrarPonto"
                  method="POST"
                  id="formColeta"
                  onsubmit="validarPontocoleta(event)">

                <div class="cadastro" id="caixa">

                    <h2>Conhece outro ponto de coleta?</h2>
                    <h3>Informações do Local</h3>

                    <div class="campo">
                        <i class="fas fa-recycle"></i>
                        <input type="text" name="nome" placeholder="Nome do ponto" required>
                    </div>

                    <div class="campo cep">
                        <i class="fas fa-location-dot"></i>
                        <input type="text" id="cep" name="cep" placeholder="CEP" required>
                        <button type="button" id="buscar">Buscar</button>
                    </div>

                    <div class="campo">
                        <i class="fas fa-road"></i>
                        <input type="text" id="rua" name="endereco" placeholder="Endereço" readonly>
                    </div>

                    <div class="campo">
                        <i class="fas fa-map-signs"></i>
                        <input type="text" id="bairro" name="bairro" placeholder="Bairro" readonly>
                    </div>

                    <div class="campo">
                        <i class="fas fa-city"></i>
                        <input type="text" id="cidade" name="cidade" placeholder="Cidade" readonly>
                    </div>

                    <div class="campo">
                        <i class="fas fa-flag"></i>
                        <input type="text" id="estado" name="estado" placeholder="Estado" readonly>
                    </div>

                    <div class="linha-dupla">
                        <div class="campo">
                            <i class="fas fa-hashtag"></i>
                            <input type="text" name="numero" placeholder="Número">
                        </div>

                        <div class="campo">
                            <i class="fas fa-note-sticky"></i>
                            <input type="text" name="complemento" placeholder="Complemento">
                        </div>
                    </div>

                    <div class="campo campo-obs">
                        <i class="fas fa-comment-dots"></i>
                        <textarea name="observacao" placeholder="Observação"></textarea>
                    </div>

                    <button class="btn-cadastrar" type="submit">
                        Cadastrar ponto
                    </button>

                </div>
            </form>

            <!-- MAPA -->
            <div id="map"></div>

        </div>
    </div>
</section>

<!-- ========================================================= -->
<!-- FOOTER -->
<!-- ========================================================= -->
<footer class="eco-footer">
    <div class="eco-container">

        <div class="footer-content">

            <div class="footer-col footer-about">
                <div class="footer-logo">
                    <img src="<?= BASE_URL ?>/public/imagens/logo-ecopoint-white.png" alt="Eco Point">
                    <span>Eco Point</span>
                </div>

                <p>
                    Plataforma dedicada à conscientização ambiental e promoção da reciclagem eletrônica.
                </p>

                <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <div class="footer-col footer-links">
                <h4>Links Rápidos</h4>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#quiz">Quiz</a></li>
                    <li><a href="#videos">Vídeos</a></li>
                    <li><a href="#noticias">Notícias</a></li>
                    <li><a href="<?= BASE_URL ?>/mapa">Mapa</a></li>
                </ul>
            </div>

            <div class="footer-col footer-links">
                <h4>Recursos</h4>
                <ul>
                    <li><a href="<?= BASE_URL ?>/sobre">Sobre Nós</a></li>
                    <li><a href="<?= BASE_URL ?>/ongs">ONGs</a></li>
                    <li><a href="<?= BASE_URL ?>/informacoes">Informações</a></li>
                    <li><a href="#">Política de Privacidade</a></li>
                    <li><a href="#">Termos de Uso</a></li>
                </ul>
            </div>

            <div class="footer-col footer-contact">
                <h4>Contato</h4>
                <ul class="contact-list">
                    <li><i class="fas fa-envelope"></i> contato@ecopoint.com.br</li>
                    <li><i class="fas fa-phone"></i> (11) 9999-9999</li>
                    <li><i class="fas fa-map-marker-alt"></i> São Paulo, SP - Brasil</li>
                </ul>
            </div>

        </div>

        <div class="footer-bottom">
            <p>&copy; <?= date('Y') ?> Eco Point. Todos os direitos reservados.</p>
            <p>Desenvolvido com <i class="fas fa-heart"></i> para um futuro sustentável</p>
        </div>

    </div>
</footer>

<!-- ========================================================= -->
<!-- MOBILE MENU -->
<!-- ========================================================= -->
<button class="mobile-menu-toggle">
    <i class="fa-solid fa-bars"></i>
</button>

<div class="mobile-menu">
    <nav class="mobile-nav">

        <div class="mobile-user">

            <div class="mobile-user-header">
                <i class="fa-solid fa-user"></i>
                <span>
                    <?php echo htmlspecialchars($_SESSION['usuario']['login']); ?>
                </span>
            </div>

            <a href="/ecoPoint/app/views/editar/editar_perfil.php" class="mobile-item">
                <i class="fa-solid fa-pen"></i>
                Editar Perfil
            </a>

            <a href="/ecoPoint/logout" class="mobile-item logout">
                <i class="fa-solid fa-right-from-bracket"></i>
                Logout
            </a>

        </div>
        <a href="#home" class="mobile-item">
            <i class="fa-solid fa-house"></i>
            <span>Home</span>
        </a>

        <a href="#quiz" class="mobile-item">
            <i class="fa-regular fa-circle-question"></i>
            <span>Quiz</span>
        </a>

        <a href="#videos" class="mobile-item">
            <i class="fa-regular fa-circle-play"></i>
            <span>Vídeos</span>
        </a>

        <a href="#noticias" class="mobile-item">
            <i class="fa-regular fa-newspaper"></i>
            <span>Notícias</span>
        </a>

    </nav>
</div>

<!-- ========================================================= -->
<!-- SCRIPTS -->
<!-- ========================================================= -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="<?= BASE_URL ?>/public/js/validacaoquiz.js"></script>
<script src="<?= BASE_URL ?>/public/js/mapa.js"></script>
<script src="/ecoPoint/public/js/validacaopontocoleta.js"></script>

<script>
    const BASE_URL = '<?= BASE_URL ?>';
</script>

<script>
document.addEventListener("DOMContentLoaded", () => {

    const toggle = document.querySelector(".mobile-menu-toggle");
    const mobileMenu = document.querySelector(".mobile-menu");

    if (toggle && mobileMenu) {

        toggle.addEventListener("click", () => {
            mobileMenu.classList.toggle("active");
            document.body.classList.toggle("menu-open");
        });

        // clicar fora fecha
        mobileMenu.addEventListener("click", (e) => {
            if (e.target === mobileMenu) {
                mobileMenu.classList.remove("active");
                document.body.classList.remove("menu-open");
            }
        });

    }

});
</script>



