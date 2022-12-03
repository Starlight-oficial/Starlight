<?php
//PESQUISAR DO USUARIO
include('../adm/Conexao.php');
session_start();

include_once("../loginADM/valida-permanenciaAdm.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="../assets/images/Axolote.png" type="image/x-icon">

  <link rel="stylesheet" href="../cards/pesquisa.css">


  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
  <!--MAPA LOCALIZADOR-->

  <!-- Make sure you put this AFTER Leaflet's CSS -->
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
  <!--MAPA LOCALIZADOR-->

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="../assets/images/Axolote.png" type="image/svg+xml">

  <!-- 
  - custom css link
-->
  <link rel="stylesheet" href="../assets/css/homee.css">

  <!-- 
  - google font link
-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- 
  - preload images
-->
  <link rel="preload" as="image" href="./assets/images/axolnome.png">
  <link rel="preload" as="image" href="./assets/images/axolnome.png" media="min-width(768px)">
  <link rel="preload" as="image" href="./assets/images/axolnome.png" media="min-width(768px)">

  <title>Axol.com</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="../assets//images/axolnome.png" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="../assets/images/axolnome.png">
  <link rel="preload" as="image" href="../assets/images/axolnome.png" media="min-width(768px)">
  <link rel="preload" as="image" href="../assets/images/axolnome.png" media="min-width(768px)">

</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <!--PARA FICAR COM COR DE FUNDO NO PESQUISAUser.PHP-->
  <style>
    #top {
      background-color: #FBF5F7;
    }
  </style>

  <header class="header" data-header>
    <div class="container">

      <h1>
        <img src="../assets/images/axolnome.png" width="90" height="90" loading="lazy" alt="hero image">


      </h1>

      <nav class="navbar" data-navbar>
        <div class="navbar-top">
          <a href="#" class="logo">Axol</a>

          <button class="nav-close-btn" aria-label="Close menu" data-nav-toggler>
            <ion-icon name="close-outline">Axol</ion-icon>
          </button>
        </div>

        <ul class="navbar-list">
        
                             
                  <li class="navbar-item">
                    <a href="nav-restritaAdm.php" class="navbar-link" data-nav-toggler>Dashboard</a>
                  </li>
        
                  <li class="navbar-item">
                    <a href="clientes.php" class="navbar-link" data-nav-toggler>Cliente</a>
                  </li>

                  <li class="navbar-item">
                    <a href="prestadores.php" class="navbar-link" data-nav-toggler>Prestadores</a>
                  </li>

                  <li class="navbar-item">
                    <a href="postagens.php" class="navbar-link" data-nav-toggler>Postagens</a>
                  </li>
                
            </ul>

        </nav>

        <div class="header-actions">

        <a href="logout.php" class="header-action-btn login-btn">Sair
          <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
        </a>

        </div>

        <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
</header>


  <!--- #SEARCH BOX-->

  <div class="search-container" data-search-box>
    <div class="container">

      <button class="search-close-btn" aria-label="Fechar pesquisa" data-search-toggler>
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <div class="search-wrapper">
        <input type="search" name="search" placeholder="Pesquisar..." aria-label="Search" class="search-field">

        <button class="search-submit" aria-label="Submit" data-search-toggler>
          <ion-icon name="search-outline"></ion-icon>
        </button>
      </div>

    </div>
  </div>

  <br><br><br><br><br><br>
  <!--ESPAÇO PARA APARECER O SISTEMA DE FILTRO-->

  <!--FORMULÁRIO SISTEMA DE BUSCA-->
  <div class="texto-index">
    <h3>Pesquise e encontre as Postagens</h3>
   
  </div>

  <div class="container-two">
    <form method="POST" action="">
      <!--../cards/busca-cliente.php-->
      <div class="main">


        <div class="search-box">
          <div class="searchbar">
            <i class="fas fa-search"></i>
            <input name="nome_postagem" id="keyword" type="text" placeholder="Use palavras-chave...">
          </div>

        

          <div class="button">
            <button type="submit" name="pesqPrestador" id="pesqPrestador">Procurar</button>
          </div>
        </div>
      </div>
    </form>
  </div>
  </div>

  <!----------------------  CARDS NOVOS ------------------------>

  <!-- 
        - #COURSE
      -->


  <section class="section course" id="courses" aria-label="course" style="background-image: url('./assets/images/course-bg.jpg')">
    <div class="container">

      <h1>
        <p class="section-subtitle">Postagens cadastradas!</p>
      </h1>

      <div class="card-actions">



      <ul class="grid-list">
        
        <!-- CARD 1-->
        <?php
        try {
          $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
          //var_dump($dados);
         if (is_array($dados)) {
          $nome = "%" . $dados ['nome_postagem']. "%";
        } else{
            $nome = "%".$dados."%";
        }
          $stmt = $pdo->prepare("SELECT descricaoPostagem,imgPostagem, tituloPostagem, dataPostagem FROM tbpostagem  
                    INNER JOIN tbprestadorservico ON tbprestadorservico.codPrestadorServico = tbpostagem.codPrestadorServico
                    WHERE descricaoPostagem LIKE :nome ORDER BY descricaoPostagem ASC");
          $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
          $stmt->execute();

          while ($row = $stmt->fetch(PDO::FETCH_BOTH)) { ?>

            <li>
              <div class="course-card">

                <figure class="card-banner">
                  <img <?php echo "src='../restrito/imagens/" . $row['imgPostagem'] . "'"; ?> width="370" height="270" loading="lazy" alt="Competitive Strategy law for all students" class="img-cover">
                
                </figure>
                <div class="card-actions">

              <span class="badge"><?php echo "" . $row['tituloPostagem'] . ""; ?></span>

            </div>

            <div class="card-content">
                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="paw" aria-hidden="true"></ion-icon>

                      <time datetime="PT18H15M44S" class="card-meta-text">
                        
                      </time>
                      <time datetime="PT18H15M44S" class="card-meta-text">
                       
                      </time>
                    </li>

                  </ul>

               
                  <h3 class="h3">
                    <a href="#" class="card-title" name="nomePrestadorServico"><?php echo $row['tituloPostagem'] . "<br>"; ?></a>
                  </h3>

                  <div class="rating-wrapper">

                    <div class="rating">
                      <!--<ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>-->
                    </div>

                   <!--<a href='../restrito/estrelas.php' class="header-action-btn login-btn" class="card-title">Avaliar</a>-->

                  </div>
                  <!--<button class="btn btn-primary">Detalhes</button>-->
                  <div class="card-footer">
                    <div class=""> <?php echo "Data da Postagem: " . $row['dataPostagem'] . "<br>"; ?></div>
                    <div class=""> <?php echo "Título: " . $row['tituloPostagem'] . "<br>"; ?></div>
                    <div class=""> <?php echo "Descrição: " . $row['descricaoPostagem'] . "<br>"; ?></div>
                    
                    <!--<div class="card-meta-item">
                    </div>-->

                  </div>

                </div>

              </div>
            </li>
        <?php

          } //fecha o laço while

        } //fecha o try
        catch (PDOException $e) {
          echo "Erro" . $e->getMessage();
        }
        ?>
        <!-- CARD 1-->


    </div>
  </section>

  <br><br><br><br><br>
  
  <!----------------------  FECHAMENTO CARDS NOVOS ------------------------>

  <a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
    <ion-icon name="arrow-up"></ion-icon>
</a>





<!-- 
- custom js link
-->
<script src="./assets/js/scriptHome.js" defer></script>

<!-- 
- ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<!-- 
- #FOOTER
-->

<footer class="footer">
<div class="container">

  <div class="footer-top">

    <div class="footer-brand">

      <a href="#" class="logo">Axol</a>

      <p class="section-text">
        Se trata de um sistema desenvolvido pela empresa "StarLight" com foco em auxiliar os donos de pets.
      </p>

      <ul class="social-list">

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-facebook"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-twitter"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-linkedin"></ion-icon>
          </a>
        </li>

        <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-pinterest"></ion-icon>
          </a>
        </li>

      </ul>

    </div>

    <ul class="footer-list">

      <li>
        <p class="footer-list-title">Explorar</p>
      </li>

      <li>
        <a href="#" class="footer-link">
          <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

          <span class="span">Sobre nós</span>
        </a>
      </li>

      <li>
        <a href="#" class="footer-link">
          <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

          <span class="span">Informações</span>
        </a>
      </li>

      <li>
        <a href="#" class="footer-link">
          <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

          <span class="span">Serviços</span>
        </a>
      </li>

      

    </ul>

    <ul class="footer-list">

      <li>
        <p class="footer-list-title">Funcionalidades</p>
      </li>

      <li>
        <a href="selectLogin.html" class="footer-link">
          <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

          <span class="span">Cadastro</span>
        </a>
      </li>

      <li>
        <a href="#" class="footer-link">
          <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

          <span class="span">Em contrução...</span>
        </a>
      </li>

      

    </ul>

    <ul class="footer-list">

      <li>
        <p class="footer-list-title">Informações de Contato</p>
      </li>

      <li class="footer-item">
        <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

        <address class="footer-link">
          Etec Guaianazes.
        </address>
      </li>

      <li class="footer-item">
        <ion-icon name="call" aria-hidden="true"></ion-icon>

        <a href="tel:+13647657839" class="footer-link">(55) 11-4002-8922</a>
      </li>

      <li class="footer-item">
        <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

        <a href="mailto:contact@eduhome.com" class="footer-link">starlight@gmail.com</a>
      </li>

    </ul>

  </div>

  <div class="footer-bottom">
    <p class="copyright">
       <a href="#" class="copyright-link">Axol</a>
    </p>
  </div>

</div>
</footer>





<!-- 
- #BACK TO TOP
-->

<a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
<ion-icon name="arrow-up"></ion-icon>
</a>

</body>

</html>
