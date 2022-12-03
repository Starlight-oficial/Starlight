<?php

    session_start();

    include_once("valida-permanenciaAdm.php");

	require_once("../model/PrestadorServico.php");

	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <!-- My CSS -->
  <link rel="stylesheet" href="../css/desh.css">

  <link rel="stylesheet" href="barra-rolagem.css">

  <link rel="shortcut icon" href="./assets/images/Axolote.png" type="image/x-icon">
	<title>Axol (Área Restrita)</title>
</head>
<body>

   <!-- INICIO SIDEVAR -->
   <?php
include "../extend/sidevar.inc"
  ?>
  <!-- FIM SIDEVAR -->

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Cadastros</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Pesquisar...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<i class='bx bx-user-circle'></i>			</a>
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Axol</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Acesso restrito</a>
						</li>
					</ul>
				</div>
				<!--BOTÃO RELATÓRIO-->

				<form class="d-flex" role="search" >
				<button  class="btn-download btn" type="submit">Atualizar
				<i class='bx bxs-cloud-download' ></i>
				</button>
				
			</div>
<br>
          </form>
		  		<!--FIM BOTÃO RELATÓRIO-->

            <!-- INICIO DE BLOCOS 3 QUARADOS -->
            <?php
            include "../extend/adm.inc";
            ?>
            <!-- FIM DE 3 BLOCOS -->

      </tbody>
    </table>

		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

    <script src="../js/dash.js" defer></script></body>
</html>
