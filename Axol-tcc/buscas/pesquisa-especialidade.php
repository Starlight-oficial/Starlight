<?php

require_once('../model/Especialidade.php'); 

try {
  $especialidade = new Especialidade();

  $nomeEspecialidade = $_POST['txtNomeEspecialidade'];

  $pesquisaEspecialidade = $especialidade->pesquisaEspecialidade($nomeEspecialidade);
} catch (Exception $e) {
  echo $e->getMessage();
}

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

				<form class="d-flex" role="search" action="../relatorios/relatorio-prestador.php" method="post">
				<button  class="btn-download btn" type="submit">Relatório
				<i class='bx bxs-cloud-download' ></i>
				</button>
				
			</div>
<br>
          </form>
		  		<!--FIM BOTÃO RELATÓRIO-->
          <br>

			<!--<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>Serviços Cadastrados</h3>
						<p>(Em construção)</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>Clientes Cadastrados</h3>
						<p>(Em construção)</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>Produtos anúnciados</h3>
						<p>(Em construção)</p>
					</span>
				</li>
			</ul>-->


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Lista Prestadores</h3>
            <!--FORMULÁRIO SISTEMA DE BUSCA-->
            <form class="d-flex" role="search" action="../buscas/pesquisa-especialidade.php" method="post">
            <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search" name="txtNomeEspecialidade" id="txtNomeEspecialidade">
            <button class="btn btn-outline-danger" type="submit"> <i class='bx bx-search' ></i> </button>
          </form>
      <!--FORMULÁRIO SISTEMA DE BUSCA-->
					</div>
					<div id="container">
    <table>
    <thead>
              <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Espécie</th>
                <th>Código EspecialidadeServico</th><!--ACHO QUE TENHO QUE COLOCAR Código Prestador-->
              </tr>
            </thead>

            <tbody>
              <?php foreach ($pesquisaEspecialidade as $pesquisa) { ?>
                <tr>

                  <td><?php echo $codEspecialidade = $pesquisa['codEspecialidade'] ?></td>
                  <td><?php echo $nomeEspecialidade = $pesquisa['nomeEspecialidade'] ?></td>
                  <td><?php echo $pesquisa['especieEspecialidade'] ?></td>
                  <td><?php echo $pesquisa['codPrestadorServico'] ?></td>

                </tr>
        </div>

      </div>
    </div>

  <?php } ?>


  </tbody>
    </table>
  </div>


      </tbody>
    </table>
  </div>
				
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

    <script src="../js/dash.js" defer></script></body>
</html>
