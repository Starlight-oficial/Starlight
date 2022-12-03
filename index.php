<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--==================== UNICONS ====================-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        
        <!--==================== SWIPER CSS ====================-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        
        <!--==================== CSS ====================-->
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="icon" href="assets/img/CabecaAguia.png">
        <title>Starlight</title>
    </head>
    <body>

        
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <img src="assets/img/Brilho Branco png.png" width="50" height="50" alt="">
                <a href="#home" class="nav__logo"><h3>Starlight</h3></a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list grid">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">
<!-- Icon da Nav-Menu -->      <i class="uil uil-estate nav__icon"></i> Home
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link"> 
<!-- Icon da Nav-Menu -->      <i class="uil uil-user nav__icon"></i> Sobre
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#skills" class="nav__link">
 <!-- Icon da Nav-Menu -->    <i class="uil uil-arrow nav__icon"></i>Habilidades
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#services" class="nav__link">
<!-- Icon da Nav-Menu -->      <i class="uil uil-monitor nav__icon"></i>Plataformas
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#descricao" class="nav__link">
<!-- Icon da Nav-Menu -->      <i class="uil uil-building nav__icon"></i>Descrição
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#equipe" class="nav__link">
 <!-- Icon da Nav-Menu -->     <i class="uil uil-users-alt nav__icon"></i> Equipe
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#projetos" class="nav__link">
 <!-- Icon da Nav-Menu -->    <i class="uil uil-file-alt nav__icon"></i>Projetos
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">
<!-- Icon da Nav-Menu -->     <i class="uil uil-message nav__icon"></i> Contate-nos
                            </a>
                        </li>
                    </ul>
                    <i class="uil uil-times nav__close" id="nav-close"></i>
                </div>

                <div class="nav__btns">
                    <!--Theme change button-->
                    <i class="uil uil-moon change-theme" id="theme-button"></i>


                    <div class="nav__toggle" id="nav-toggle">
                        <i class="uil uil-apps"></i> 
                    </div>
                </div>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                <div class="home__container container grid">
                   <div class="home__content grid">
                        <div class="home__social">
                            <a href="https://www.linkedin.com/" target="_blank" class="home__social-icon"> <!--LINKANDO COM NOSSAS REDES-->
                                <i class="uil uil-instagram"></i> <!--icon da rede social-->
                            </a>

                            <a href="https://dribbble.com/" target="_blank" class="home__social-icon">  <!--LINKANDO COM NOSSAS REDES-->
                                <i class="uil uil-twitter-alt"></i> <!--icon da rede social-->
                            </a>

                            <a href="https://github.com/" target="_blank" class="home__social-icon">  <!--LINKANDO COM NOSSAS REDES-->
                                <i class="uil uil-github-alt"></i> <!--icon da rede social-->
                            </a>
                        </div>

                        <div class="home__img">
                            <img src="assets/img/Brilho Branco png.png" alt="" class="about__img" x='20' y='26'>
                        </div>

                        <div class="home__data">
                            <h1 class="home__title">Olá, nós somos a Starlight</h1>
                            <h3 class="home__subtitle">Empresa desenvolvedora de software</h3>
                            <p class="home__description">Desenvolvendo soluções brilhantes.</p>
                                <a href="#contact" class="button button--flex">
                                Contate-nos<i class="uil uil-message button__icon"></i>
                            </a>
                        </div>
                   </div> 

                   <div class="home__scroll">
                    <a href="#footer" class="home__scroll-button button--flex">
                        <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                        <span class="home__scroll-name">Rolar para baixo</span>
                        <i class="uil uil-arrow-down home__scroll-arrow"></i>
                    </a>
                   </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <h2 class="section__title">Sobre nós</h2>
                <span class="section__subtitle">Nossa introdução</span>

                <div class="about__container container grid">
                    <img src="assets/img/Brilho Branco png.png" alt="" class="about__img">

                    <div class="about__data">
                        <h2 class="section__title">Starlight</h2>
                        <p class="about__description">A empresa Starlight é especializada no desenvolvimento de softwares para empresas de baixo e médio porte. Com ênfase em programação web e mobile.</p>

                            <div class="about__info">
                                <div>
                                    <span class="about__info-title">1</span>
                                    <span class="about__info-name">Ano de<br> expriência</span>
                                </div>

                                <div>
                                    <span class="about__info-title">1</span>
                                    <span class="about__info-name">Projeto <br> completo</span>
                                </div>
                                
                                <div>
                                    <span class="about__info-title">3</span>
                                    <span class="about__info-name">Companhias <br> parceiras</span>
                                </div>
                            </div>

                            <!--<div class="about__buttons">
<Por pdf para download  <a download="#" href="#" class="button button--flex">
                                    Download CV<i class="uil uil-download-alt button__icon"></i>
                                </a>
                            </div>-->
                        </div>
                     </div>
                 </section>

            <!--==================== SKILLS ====================-->
            <section class="skills section" id="skills">
                <h2 class="section__title">Habilidades da empresa</h2>
                <span class="section__subtitle">Nosso nivel técnico</span>

                <div class="skills__container container grid">
                    <div>
           <!--==================== SKILLS 1====================-->
           <div class="skills__content skills__open">
            <div class="skills__header">
                <i class="uil uil-brackets-curly skills__icon"></i>

                <div>
                    <h1 class="skills__title">Frontend developer</h1>
                    <span class="skills__subtitle">Mais de 1 ano</span>
                </div>

                <i class="uil uil-angle-down skills__arrow"></i>
            </div>

            <div class="skills__list grid">
                <div class="skills__data">
                    <div class="skills__titles">
                        <h3 class="skills__name">HTML5</h3>
                         <span class="skills__number">90%</span>
                    </div>
                    <div class="skills__bar">
                        <span class="skills__percentage skills__html"></span>
                    </div>
                </div>

                <div class="skills__data">
                    <div class="skills__titles">
                        <h3 class="skills__name">CSS3</h3>
                         <span class="skills__number">80%</span>
                    </div>
                    <div class="skills__bar">
                        <span class="skills__percentage skills__css"></span>
                    </div>
                </div>

                <div class="skills__data">
                    <div class="skills__titles">
                        <h3 class="skills__name">JavaScript</h3>
                         <span class="skills__number">70%</span>
                    </div>
                    <div class="skills__bar">
                        <span class="skills__percentage skills__js"></span>
                    </div>
                </div>
            </div>
           </div>   

            <!--==================== SKILLS 2====================-->
           <div class="skills__content skills__close">
            <div class="skills__header">
                <i class="uil uil-server-network skills__icon"></i>

                <div>
                    <h1 class="skills__title">Backend developer</h1>
                    <span class="skills__subtitle">Mais de 1 ano</span>
                </div>

                <i class="uil uil-angle-down skills__arrow"></i>
            </div>

            <div class="skills__list grid">
                <div class="skills__data">
                    <div class="skills__titles">
                        <h3 class="skills__name">PHP</h3>
                         <span class="skills__number">93%</span>
                    </div>
                    <div class="skills__bar">
                        <span class="skills__percentage skills__php"></span>
                    </div>
                </div>

                <div class="skills__data">
                    <div class="skills__titles">
                        <h3 class="skills__name">JavaScript</h3>
                         <span class="skills__number">70%</span>
                    </div>
                    <div class="skills__bar">
                        <span class="skills__percentage skills__node"></span>
                    </div>
                </div>

                <div class="skills__data">
                    <div class="skills__titles">
                        <h3 class="skills__name">SQL</h3>
                         <span class="skills__number">85%</span>
                    </div>
                    <div class="skills__bar">
                        <span class="skills__percentage skills__firebase"></span>
                    </div>
                </div>

                <div class="skills__data">
                    <div class="skills__titles">
                        <h3 class="skills__name">MySql</h3>
                         <span class="skills__number">55%</span>
                    </div>
                    <div class="skills__bar">
                        <span class="skills__percentage skills__python"></span>
                    </div>
                </div>
            </div>
           </div>
                    </div>
                    <div>
                        
   <!--==================== SKILLS 3 ====================-->         
   <div class="skills__content skills__close">
    <div class="skills__header">
        <i class="uil uil-swatchbook skills__icon"></i>

        <div>
            <h1 class="skills__title">Designer</h1>
            <span class="skills__subtitle">Mais de 1 ano</span>
        </div>

        <i class="uil uil-angle-down skills__arrow"></i>
    </div>

    <div class="skills__list grid">
        <div class="skills__data">
            <div class="skills__titles">
                <h3 class="skills__name">Figma</h3>
                 <span class="skills__number">90%</span>
            </div>
            <div class="skills__bar">
                <span class="skills__percentage skills__figma"></span>
            </div>
        </div>

        <div class="skills__data">
            <div class="skills__titles">
                <h3 class="skills__name">Photoshop</h3>
                 <span class="skills__number">85%</span>
            </div>
            <div class="skills__bar">
                <span class="skills__percentage skills__sketch"></span>
            </div>
        </div>

        <div class="skills__data">
            <div class="skills__titles">
                <h3 class="skills__name">Marvel App</h3>
                 <span class="skills__number">75%</span>
            </div>
            <div class="skills__bar">
                <span class="skills__percentage skills__photoshop"></span>
            </div>
        </div>
    </div>
   </div>
                    </div>
                </div>
            </section>



            <!--==================== SERVICES ====================-->
            <section class="services section" id="services">
                <h2 class="section__title">Plataformas</h2>
                <span class="section__subtitle">Atuações</span>

                <div class="services__container container grid">
            <!--==================== SERVICES 1 ====================-->
            <div class="services__content">
                <div>
                    <i class="uil uil-browser  services__icon"></i>
                    <h3 class="services__title">Desenvolvimento <br> Web</h3>
                </div>

                <span class="button button--flex button--small button--link services__button">
                    Veja mais 
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>

                <div class="services__modal">
                    <div class="services__modal-content">
                        <h4 class="services__modal-title">Desenvolvimento <br>Web</h4>
                        <i class="uil uil-times services__modal-close"></i>

                        <ul class="services__modal-services grid">
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Escrever códigos bem estruturados, eficientes e testáveis 
                                    utilizando as melhores práticas de desenvolvimento de 
                                    softwares. Criar layout/interface de usuário de sites usando 
                                    práticas padrão de HTML/CSS. Integrar dados de vários serviços 
                                    de back-end e bancos de dados.</p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

             <!--==================== SERVICES 2 ====================-->
             <div class="services__content">
                <div>
                    <i class="uil uil-desktop services__icon"></i>
                    <h3 class="services__title">Desktop <br></h3>
                </div>

                <span class="button button--flex button--small button--link services__button">
                    Veja mais 
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>

                <div class="services__modal">
                    <div class="services__modal-content">
                        <h4 class="services__modal-title">Desktop <br></h4>
                        <i class="uil uil-times services__modal-close"></i>

                        <ul class="services__modal-services grid">
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>A programação desktop tem o objetivo de criar aplicações 
                                    executáveis no computador. Com o conhecimento em programas 
                                    necessários para o desenvolvimento de aplicações dos mais 
                                    diversos tipos e funcionalidades, o programador desktop tem 
                                    um mercado de trabalho altamente abrangente.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--==================== SERVICES 3 ====================-->
            <div class="services__content">
                <div>
                    <i class="uil uil-mobile-android services__icon"></i>
                    <h3 class="services__title">Mobile<br>(Em construção)</h3>
                </div>

                <span class="button button--flex button--small button--link services__button">
                    Veja mais 
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>

                <div class="services__modal">
                    <div class="services__modal-content">
                        <h4 class="services__modal-title">Programação <br>Mobile</h4>
                        <i class="uil uil-times services__modal-close"></i>

                        <ul class="services__modal-services grid">
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Programação mobile é fazer qualquer tipo de desenvolvimento para qualquer tipo de dispositivo móvel.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

                </div>
            </section>

            <!--==================== Valores ====================-->
            <section class="services section" id="descricao">
                <h2 class="section__title">Descrição</h2>
                <span class="section__subtitle">Sobre nossos valores</span>

                <div class="services__container container grid">
            <!--==================== Valores 1 ====================-->
            <div class="services__content">
                <div>
                    <i class="uil uil-focus services__icon"></i>
                    <h3 class="services__title">Missão <br></h3>
                </div>

                <span class="button button--flex button--small button--link services__button">
                    Veja mais 
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>

                <div class="services__modal">
                    <div class="services__modal-content">
                        <h4 class="services__modal-title">Missão</h4>
                        <i class="uil uil-times services__modal-close"></i>

                        <ul class="services__modal-services grid">
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Desenvolver e oferecer soluções práticas e intuitivas aos nossos clientes, de uma forma rápida e eficaz.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

             <!--==================== Valores 2 ====================-->
             <div class="services__content">
                <div>
                    <i class="uil uil-rocket services__icon"></i>
                    <h3 class="services__title">Visão do futuro <br></h3>
                </div>

                <span class="button button--flex button--small button--link services__button">
                    Veja mais 
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>

                <div class="services__modal">
                    <div class="services__modal-content">
                        <h4 class="services__modal-title">Visão do futuro <br></h4>
                        <i class="uil uil-times services__modal-close"></i>

                        <ul class="services__modal-services grid">
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Ser reconhecido e influente no mercado de TI, sendo o melhor desenvolvedor de produtos e serviços ofertados aos nossos clientes.</p>
                            </li>
                        
                        </ul>
                    </div>
                </div>
            </div>

            <!--==================== Valores 3 ====================-->
            <div class="services__content">
                <div>
                    <i class="uil uil-diamond services__icon"></i>
                    <h3 class="services__title">Valores<br></h3>
                </div>

                <span class="button button--flex button--small button--link services__button">
                    Veja mais
                    <i class="uil uil-arrow-right button__icon"></i>
                </span>

                <div class="services__modal">
                    <div class="services__modal-content">
                        <h4 class="services__modal-title">Valores <br></h4>
                        <i class="uil uil-times services__modal-close"></i>

                        <ul class="services__modal-services grid">
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Ética.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Segurança.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Criatividade.</p>
                            </li>
                            <li class="services__modal-service">
                                <i class="uil uil-check-circle services__modal-icon"></i>
                                <p>Confiança.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

                </div>
            </section>

            <!--==================== PORTFOLIO ====================-->
            <!--pulei pois deu b.o-->
            <section class="portfolio section" id="equipe">
                <h2 class="section__title">Equipe</h2>
                <span class="section__subtitle">Desenvolvedores</span>

                <div class="portfolio__container container swiper-container">
                    <div class="swiper-wrapper">
                        <!--==================== PORTFOLIO 1 ====================-->
                        <div class="portfolio__contente grid swiper-slide">
                            <img src="assets/img/dai.png" alt="" class="portfolio__img">

                            <div class="portfolio__data">
                                <h3 class="portfolio__title">DAVID MARTINEZ</h3>
                                <p class="portfolio__description">DESENVOLVEDOR FULL STACK</p>
                                <a href="" class="button button--flex button--small portfolio__button">
                                    Rede social
                                    <i class="uil uil-arrow-right button__icon"></i>
                                </a>
                            </div>
                        </div>
                        <!--==================== PORTFOLIO 2 ====================-->
                        <div class="portfolio__contente grid swiper-slide">
                            <img src="assets/img/nanda.png" alt="" class="portfolio__img">

                            <div class="portfolio__data">
                                <h3 class="portfolio__title">FERNANDA SILVINO</h3>
                                <p class="portfolio__description">ANALISTA E DBA</p>
                                <a href="" class="button button--flex button--small portfolio__button">
                                    Rede social
                                    <i class="uil uil-arrow-right button__icon"></i>
                                </a>
                            </div>
                        </div>
                        <!--==================== PORTFOLIO 3 ====================-->
                        <div class="portfolio__contente grid swiper-slide">
                            <img src="assets/img/gu.png" alt="" class="portfolio__img">

                            <div class="portfolio__data">
                                <h3 class="portfolio__title">GUSTAVO ALVES</h3>
                                <p class="portfolio__description">PROGRAMADOR FRONTEND</p>
                                <a href="" class="button button--flex button--small portfolio__button">
                                    Rede social
                                    <i class="uil uil-arrow-right button__icon"></i>
                                </a>
                            </div>
                        </div>
                        <!--==================== PORTFOLIO 4 ====================-->
                        <div class="portfolio__contente grid swiper-slide">
                            <img src="assets/img/sana.png" alt="" class="portfolio__img">

                            <div class="portfolio__data">
                                <h3 class="portfolio__title">HOSANA SILVINO</h3>
                                <p class="portfolio__description">DESENVOLVEDORA FULL STACK</p>
                                <a href="" class="button button--flex button--small portfolio__button">
                                    Rede social
                                    <i class="uil uil-arrow-right button__icon"></i>
                                </a>
                            </div>
                        </div>
                        <!--==================== PORTFOLIO 5 ====================-->
                        <div class="portfolio__contente grid swiper-slide">
                            <img src="assets/img/ju.png" alt="" class="portfolio__img">

                            <div class="portfolio__data">
                                <h3 class="portfolio__title">JULIANA OLIVEIRA</h3>
                                <p class="portfolio__description">DESIGNER</p>
                                <a href="" class="button button--flex button--small portfolio__button">
                                    Rede social
                                    <i class="uil uil-arrow-right button__icon"></i>
                                </a>
                            </div>
                        </div>
                        <!--==================== PORTFOLIO 6 ====================-->
                        <div class="portfolio__contente grid swiper-slide">
                            <img src="assets/img/rafa.png" alt="" class="portfolio__img">

                            <div class="portfolio__data">
                                <h3 class="portfolio__title">RAFAELA SIMÕES</h3>
                                <p class="portfolio__description">PROGRAMADORA BACKEND</p>
                                <a href="" class="button button--flex button--small portfolio__button">
                                    Rede social
                                    <i class="uil uil-arrow-right button__icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-button-next">
                        <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
                    </div>

                    <div class="swiper-pagination"></div>
                    
                </div>
            </section>
         
            <!--==================== PROJECT IN MIND ====================-->
            <section class="project section" id="projetos">
                <div class="project__bg">
                    <div class="project__container container grid">
                        <div class="project__data">
                            <h2 class="project__title">Projeto Axol!</h2>
                            <p class="project__description">Conheça nosso projeto!</p>
<!--LINKAR O PROJETO PATA AMIGA-->  <a href="./Axol-tcc/index.php" class="button button--flex button--white">
                                Conheça!
                                <i class="uil uil-message project__icon button__icon"></i>
                            </a>
                        </div>

                        <img src="assets/img/Axolote.png" alt="" class="project__img">
                    </div>
                </div>
            </section>

            <!--==================== TESTIMONIAL ====================-->
            <section class="testimonial section" id="parceiros">
                <h2 class="section__title">Parceiros</h2>
                <span class="section__subtitle">Conheça nossos parceiros</span>

                <div class="testimonial__container container swiper-container">
                    <div class="swiper-wrapper"> 
                   <!--==================== TESTIMONIAL 1 ====================-->
                        <div class="testimonial__content swiper-slide">
                            <div class="testimonial__data">
                                <div class="testimonial__header">
                                    <img src="assets/img/Ancient.png" alt="" class="testimonial__img">

                                    <div>
                                        <h3 class="testimonial__name">Ancient</h3>
                                        <span class="testimonial__client">Empresa desenvolvedora</span>
                                    </div>
                                </div>


                                <div>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                </div>
                            </div>

                            <p class="testimonial__description">País de origem: Brasil
                                </p>
                        </div>

                         <!--==================== TESTIMONIAL 2 ====================-->
                         <div class="testimonial__content swiper-slide">
                            <div class="testimonial__data">
                                <div class="testimonial__header">
                                    <img src="assets/img/Ascension.jpeg" alt="" class="testimonial__img">

                                    <div>
                                        <h3 class="testimonial__name">Ascension</h3>
                                        <span class="testimonial__client">Empresa desenvolvedora</span>
                                    </div>
                                </div>


                                <div>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                </div>
                            </div>

                            <p class="testimonial__description">País de origem: Brasil
                                </p>
                        </div>

                         <!--==================== TESTIMONIAL 3 ====================-->
                         <div class="testimonial__content swiper-slide">
                            <div class="testimonial__data">
                                <div class="testimonial__header">
                                    <img src="assets/img/ForsetTech.png" alt="" class="testimonial__img">

                                    <div>
                                        <h3 class="testimonial__name">Forset Tech</h3>
                                        <span class="testimonial__client">Empresa desenvolvedora</span>
                                    </div>
                                </div>


                                <div>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                </div>
                            </div>

                            <p class="testimonial__description">País de origem: Brasil
                                </p>
                        </div>

                     <!-- Add Pagination -->
                    <div class="swiper-pagination swiper-pagination-testimonial"></div>
                </div>
            </section>

            <!--==================== CONTACT ME ====================-->
            <section class="contact section" id="contact">
                <section class="contact section" id="contact">
                    <h2 class="section__title">Contate-nos</h2>
                    <span class="section__subtitle">Entrar em contato</span>



                    <div class="contact__container container grid">
                        <div>
                            <div class="contact__information">
                                <i class="uil uil-phone contact__icon"></i>

                                <div>
                                    <h3 class="contact__title">Ligue</h3>
                                    <span class="contact__subtitle">999-777-666</span>
                                </div>
                            </div>

                            <div class="contact__information">
                                <i class="uil uil-envelope contact__icon"></i>

                                <div>
                                    <h3 class="contact__title">Email</h3>
                                    <span class="contact__subtitle">starlight@gmail.com</span>
                                </div>
                            </div>

                            <div class="contact__information">
                                <i class="uil uil-map-marker contact__icon"></i>

                                <div>
                                    <h3 class="contact__title">Endereço</h3>
                                    <span class="contact__subtitle">R. Feliciano de Mendonça, 290 - Guaianases, São Paulo - SP, 08460-365</span>
                                </div>
                            </div>
                        </div>

                        <!--FORMULÁRIO ENVIAR-->
                        <form method="post" class="contact__form grid" action="../tcc-axol/Axol-tcc/PHPMailer/enviar-email.php">
                            <div class="contact__inputs grid">
                                <div class="contact__content">
                                    <label for="" class="contact__label">Nome</label>
                                    <input type="text" class="contact__input" name="nome">
                                </div>
                                <div class="contact__content">
                                    <label for="" class="contact__label">Email</label>
                                    <input type="email" class="contact__input" name="email">
                                </div>
                            </div>

                            <div class="contact__content">
                                <label for="" class="contact__label">Assunto</label>
                                <input type="text" class="contact__input" name="assunto">
                            </div>

                            <div class="contact__content">
                                <label for="" class="contact__label">Mensagem</label>
                                <textarea id="" cols="0" rows="7" class="contact__input" name="mensagem"></textarea>
                            </div>

                            <div>
                                <!--<a href="#" class="button button--flex">
                                    Enviar
                                    <i class="uil uil-message button__icon"></i>
                                </a>-->

                                <input type="submit" value="Enviar" class="button button--flex"/>
                            </div>
                        </form>
                        <!--FIM FORMULÁRIO ENVIAR-->
                    </div>
                </section>
            </main>

            <div vw class="enabled">
                <div vw-access-button class="active"></div>
                <div vw-plugin-wrapper>
                  <div class="vw-plugin-top-wrapper"></div>
                </div>
              </div>
              <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
              <script>
                new window.VLibras.Widget('https://vlibras.gov.br/app');
              </script><!-- Fim -->

        <!--==================== FOOTER ====================-->
            <footer class="footer" id="footer">
                <div class="footer__bg">
                    <div class="footer__container container grid">
                        <div>
                            <h1 class="footer__title">Starlight</h1>
                            <span class="footer__subtitle">Desenvolvendo soluções brilhantes</span>
                        </div>

                        <ul class="footer__links">
                            <li>
                                <a href="#home" class="footer__link">Home</a>   
                            </li>
                            <li>
                                <a href="#about" class="footer__link">Sobre</a>   
                            </li>
                            <li>
                                <a href="#skills" class="footer__link">Habilidades</a>   
                            </li>
                            <li>
                                <a href="#services" class="footer__link">Plataformas</a>   
                            </li>
                            <li>
                                <a href="#descricao" class="footer__link">Descrição</a>   
                            </li>
                            <li>
                                <a href="#projetos" class="footer__link">Projetos</a>   
                            </li>
                            <li>
                                <a href="#equipe" class="footer__link">Equipe</a>   
                            </li>
                            <li>
                                <a href="#parceiros" class="footer__link">Parceiros</a>   
                            </li>
                            <li>
                                <a href="#contact" class="footer__link">Contate-nos</a>   
                            </li>
                        </ul>

                        <div class="footer__socials">
                            <a href="https://www.facebook.com/" target="_blank" class="footer__social">
                                <i class="uil uil-facebook-f"></i>
                            </a>

                            <a href="https://www.instagram.com/" target="_blank" class="footer__social">
                                <i class="uil uil-instagram"></i>
                            </a>

                            <a href="https://twitter.com/" target="_blank" class="footer__social">
                                <i class="uil uil-twitter-alt"></i>
                            </a>
                        </div>
                    </div>

                    <p class="footer__copy">&#169; Starligh. All right reserved</p>
                </div>
            </footer>
        <!--==================== SCROLL TOP ====================-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="uil uil-arrow-up scrollup__icon"></i>
        </a>

        <!--==================== SWIPER JS ====================-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--==================== MAIN JS ====================-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
