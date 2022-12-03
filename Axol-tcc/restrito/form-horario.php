<?php
session_start();


?>

<?php
require_once("../model/Horario.php");
require_once("../model/PrestadorServico.php"); //FK

try {
  $horario = new Horario();
  $prestadorServico = new PrestadorServico(); //FK

  $listahorario = $horario->listar();
  $listaprestadorservico = $prestadorServico->listar(); //FK

} catch (Exception $e) {
  echo $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/324b71f187.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/form2.css">
    <link rel="shortcut icon" href="./assets/images/Axolote.png" type="image/x-icon">

    <script src="../js/forms.js" defer></script>
    <script src="../mascaras/mascara.js"></script>
    <link rel="shortcut icon" href="../assets/images/Axolote.png" type="image/x-icon">

<title>Axol</title>
 <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<!-- 
      - favicon
    -->
<link rel="shortcut icon" href="../assets/images/axolnome.png" type="image/svg+xml">

<!-- 
      - custom css link
    -->
<link rel="stylesheet" href="../assets/css/homee.css">
<link rel="stylesheet" href="../css/intest.css"> <!--scrollball barra de rodagem-->

<!-- 
      - google font link
    -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800&display=swap"
    rel="stylesheet">

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

<!--PARA FICAR COM FUNDO DOS FORMS ROSA-->
<style>
    #top {
        background-color: rgb(248, 222, 229);
    }
        /* Contaner */
.form-login .contaner{
    border-top-left-radius:10px;
    border-top-right-radius:10px;
    border-bottom-left-radius:10px;
    border-bottom-right-radius:10px;
    text-transform:capitalize;
    padding-left:15px;
   }
   
   /* Nome diaSemanaHorario */
   #diaSemanaHorario{
    width:75px;
    left:170px;
    margin-left:99px;
    position:relative;
    top:21px;
    min-width:0px;
    box-shadow:none;
    display:flex;
    color:rgb(0, 0, 0);
   }
   
/* Form Division */
#login-container2 form{
 transform:translatex(0px) translatey(0px);
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
                    <a href="../index.php" class="navbar-link" data-nav-toggler>Voltar ao Home</a>
                  </li>
                 
            </ul>

        </nav>

        <div class="header-actions">

        <a href="../selectLogin.html" class="header-action-btn login-btn">
          <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
        </a>

        </div>

        <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
</header>
<br><br><br>
<body>
    <main>
        <div class="login-container2" id="login-container2">
            <div class="form-container2">
                <form class="form form-login" name="diaensaio[]" action="cadastra-horario.php" enctype="multipart/form-data" method="post">

                    <div class="form-social">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                    <h3 class="form-text">Dias da Semana!</h3>
                    <div class="form-input-container">
                    <div class="contaner">
                      <input type="checkbox" class="btn-check" name="data[]" value=" Segunda" id="diaSemanaHorario" autocomplete="off"/>Segunda<br/>
                      <input type="checkbox" class="btn-check" name="data[]" value=" Terca" id="diaSemanaHorario" autocomplete="off"/>Terça<br/>
                      <input type="checkbox" class="btn-check" name="data[]" value=" Quarta" id="diaSemanaHorario" autocomplete="off"/>Quarta<br/>
                      <input type="checkbox" class="btn-check" name="data[]" value=" Quinta" id="diaSemanaHorario" autocomplete="off"/>Quinta<br/>
                      <input type="checkbox" class="btn-check" name="data[]" value=" Sexta" id="diaSemanaHorario" autocomplete="off"/>Sexta<br/>
                      <input type="checkbox" class="btn-check" name="data[]" value=" Sabado" id="diaSemanaHorario" autocomplete="off"/>Sábado<br/>
                      <input type="checkbox" class="btn-check" name="data[]" value=" Domingo" id="diaSemanaHorario"  autocomplete="off"/>Domingo<br/>
                </div>
                </div>
                <h3 class="form-text">Horário de Funcionamento!</h3>

                    <div class="form-input-container">
                      <input type="hour" class="form-input" id="txtAberturaHorario" name="txtAberturaHorario" placeholder="Horário de Abertura: 00:00" required>
                      <input type="hour" class="form-input" id="txtFechamentoHorario" name="txtFechamentoHorario" placeholder="Horário de Fechamento: 00:00" required>
                    </div>

        <input type="submit" class="form-button" value="Cadastrar">
        <a href="./form-especialidade.php" type="submit" class="form-button" value="Continuar">Voltar</a> 

                  </form>
            </div>
            <div class="overlay2-container2">
                <div class="overlay2">
                    <h2 class="form-title form-title-light">Olá Prestador!</h2>
                    
                </div>
            </div>
        </div>
    </main>
<!-- 
    - #BACK TO TOP
  -->

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