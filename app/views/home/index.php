<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco Point - Home</title>

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">


    <!-- CSS -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/main.css">

    <!-- FONT AWESOME -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">





</head>

<body>

    <!-- FUNDO VERDE -->
    <div class="conteiner-green">

        <!-- HEADER -->
        <header class="eco-header">
            <div class="eco-container eco-header-container">

                <div class="eco-logo">
                    <img src="./public/imagens/logo-ecopoint-dark.png" alt="Eco Point">
                    <span>Eco Point</span>
                </div>

                <nav class="eco-nav">
                    <a href="#home" class="eco-link">Home</a>
                    <a href="#quiz" class="eco-link">Quiz</a>
                    <a href="#videos" class="eco-link">Vídeos</a>
                    <a href="#noticias" class="eco-link">Notícias</a>
                </nav>

                <div class="eco-actions">
                    <a href="<?= BASE_URL ?>/login" class="eco-login">Login</a>
                    <a href="<?= BASE_URL ?>/cadastro" class="eco-btn">Cadastre-se
                     <i class="fas fa-arrow-right"></i>

                    </a>
                </div>
    
              
                
                 
                
            </div>
        </header>

        <!-- HERO -->
        <section class="eco-hero" id="home">
            <div class="eco-container eco-hero-container">
               


                <!-- TEXTO -->
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
                        <a href="#quiz" class="eco-hero-btn primary">Começe agora
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="#noticias" class="eco-hero-btn secondary">Como funciona
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>

                    <ul class="eco-hero-features">
                        <li><i class="fas fa-seedling"></i> Reciclagem consciente</li>
                        <li><i class="fas fa-book"></i> Educação ambiental</li>
                        <li><i class="fas fa-hands-helping"></i> Impacto social</li>
                    </ul>
                </div>




                <div class="eco-hero-quiz">
                    <div class="quiz-card">

                        <!-- HEADER -->
                        <div class="quiz-header">
                        <div class="quiz-progress-indicator">
                            <span class="current-question">0</span> /
                            <span class="total-questions">0</span>
                        </div>
                        </div>

                        <!-- CONTEÚDO -->
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
                                Explore seus conhecimentos sobre reciclagem eletrônica, entenda o impacto do descarte consciente de resíduos tecnológicos e descubra como pequenas atitudes podem gerar grandes mudanças ambientais.
                            
                            </p>
                            </div>

                            <div class="quiz-footer">
                            <a class="quiz-btn quiz-btn-primary start-quiz">
                                <span>Iniciar Quiz</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                            </div>
                        </div>

                        <!-- PERGUNTAS -->
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

                        <!-- RESULTADO -->
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
                                <i class="fas fa-redo"></i>
                                <span>Refazer Quiz</span>
                            </a>
                            </div>
                        </div>

                        </div>
                    </div>
                </div>



                



            </div>
        </section>
    </div>
    

    <!-- VÍDEOS EDUCATIVOS -->
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

    <!-- NOTÍCIAS -->
    <section class="sessao-noticias" id="noticias">
        <div class="eco-container">
            <div class="section-header">
                <span class="section-eyebrow">
                    <i class="fas fa-newspaper"></i>
                    Notícias
                </span>
                <h2 class="section-title">O que acontece no mundo sustentável</h2>
                <p class="section-subtitle">Fique por dentro das últimas notícias sobre sustentabilidade e meio ambiente</p>
            </div>

            <div class="noticias-grid">
                <div class="noticia-card">
                    <div class="noticia-image">
                        <img src="<?= BASE_URL ?>/public/imagens/imglink1.png" alt="Agenda 2030">
                        <div class="noticia-badge">Sustentabilidade</div>
                    </div>
                    <div class="noticia-content">
                        <span class="noticia-date"><i class="fas fa-calendar"></i> 15 Jan 2024</span>
                        <h3>Agenda 2030</h3>
                        <p>A Agenda 2030 da ONU é um plano global para um futuro sustentável, com 17 objetivos de desenvolvimento sustentável.</p>
                        <a href="#" class="noticia-link">Leia mais <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="noticia-card">
                    <div class="noticia-image">
                        <img src="<?= BASE_URL ?>/public/imagens/imglink2.png" alt="Notícia 2">
                        <div class="noticia-badge">Reciclagem</div>
                    </div>
                    <div class="noticia-content">
                        <span class="noticia-date"><i class="fas fa-calendar"></i> 12 Jan 2024</span>
                        <h3>Novas Tecnologias de Reciclagem</h3>
                        <p>Descubra as inovações que estão revolucionando o processo de reciclagem de equipamentos eletrônicos.</p>
                        <a href="#" class="noticia-link">Leia mais <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="noticia-card">
                    <div class="noticia-image">
                        <img src="<?= BASE_URL ?>/public/imagens/imglink3.png" alt="Notícia 3">
                        <div class="noticia-badge">Meio Ambiente</div>
                    </div>
                    <div class="noticia-content">
                        <span class="noticia-date"><i class="fas fa-calendar"></i> 10 Jan 2024</span>
                        <h3>Impacto Positivo da Reciclagem</h3>
                        <p>Estudos mostram como a reciclagem correta pode reduzir significativamente o impacto ambiental.</p>
                        <a href="#" class="noticia-link">Leia mais <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="eco-footer">
        <div class="eco-container">
            <div class="footer-content">
                <div class="footer-col footer-about">
                    <div class="footer-logo">
                        <img src="<?= BASE_URL ?>/public/imagens/logo-ecopoint-white.png" alt="Eco Point">
                        <span>Eco Point</span>
                    </div>
                    <p>Plataforma dedicada à conscientização ambiental e promoção da reciclagem eletrônica para um futuro mais sustentável.</p>
                    <div class="footer-social">
                        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
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
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span>contato@ecopoint.com.br</span>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <span>(11) 9999-9999</span>
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>São Paulo, SP - Brasil</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; <?= date('Y') ?> Eco Point. Todos os direitos reservados.</p>
                <p>Desenvolvido com <i class="fas fa-heart"></i> para um futuro sustentável</p>
            </div>
        </div>
    </footer>
    <button class="mobile-menu-toggle" aria-label="Abrir menu">
        <i class="fa-solid fa-bars"></i>
    </button>

    <!-- MOBILE MENU -->
<div class="mobile-menu">
    <nav class="mobile-nav">

        <!-- AÇÕES -->
        <div class="mobile-actions">

            <!-- LOGIN (não existe outline, mantém solid) -->
            <a href="<?= BASE_URL ?>/login" class="mobile-item mobile-login">
                <i class="fa-solid fa-right-to-bracket"></i>
                <span>Login</span>
            </a>

            <!-- CADASTRO (outline existe) -->
            <a href="<?= BASE_URL ?>/cadastro" class="mobile-item mobile-register">
                <i class="fa-regular fa-user"></i>
                <span>Cadastre-se</span>
            </a>

        </div>

        <!-- LINKS -->

        <!-- HOME (não existe outline, mantém solid) -->
        <a href="#home" class="mobile-item">
            <i class="fa-solid fa-house"></i>
            <span>Home</span>
        </a>

        <!-- QUIZ -->
        <a href="#quiz" class="mobile-item">
            <i class="fa-regular fa-circle-question"></i>
            <span>Quiz</span>
        </a>

        <!-- VÍDEOS -->
        <a href="#videos" class="mobile-item">
            <i class="fa-regular fa-circle-play"></i>
            <span>Vídeos</span>
        </a>

        <!-- NOTÍCIAS -->
        <a href="#noticias" class="mobile-item">
            <i class="fa-regular fa-newspaper"></i>
            <span>Notícias</span>
        </a>

    </nav>
</div>




 

    <!-- SCRIPT QUIZ -->
    <script>
        const BASE_URL = '<?= BASE_URL ?>';
    </script>
    <script src="<?= BASE_URL ?>/public/js/validacaoquiz.js"></script>
        <script>
            const toggle = document.querySelector('.mobile-menu-toggle');
            const menu = document.querySelector('.mobile-menu');
            const body = document.body;
            const icon = toggle.querySelector('i');

            toggle.addEventListener('click', () => {
            menu.classList.toggle('active');
            body.classList.toggle('menu-open');

            if (menu.classList.contains('active')) {
                icon.classList.replace('fa-bars', 'fa-xmark');
                body.style.overflow = 'hidden';
            } else {
                icon.classList.replace('fa-xmark', 'fa-bars');
                body.style.overflow = '';
            }
            });

            document.querySelectorAll('.mobile-link').forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.remove('active');
                body.classList.remove('menu-open');
                icon.classList.replace('fa-xmark', 'fa-bars');
                body.style.overflow = '';
            });
            });

           
            const banner = document.querySelector('.conteiner-green');

            window.addEventListener('scroll', () => {
                const bannerHeight = banner.offsetHeight;

                if (window.scrollY > bannerHeight - 80) {
                    document.body.classList.add('scrolled');
                } else {
                    document.body.classList.remove('scrolled');
                }
            });






  

  

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href !== '#' && href.length > 1) {
                    e.preventDefault();
                    const target = document.querySelector(href);
                    if (target) {
                        const headerOffset = 80;
                        const elementPosition = target.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });
    </script>
</body>

</html>
