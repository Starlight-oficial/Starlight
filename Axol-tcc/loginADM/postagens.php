<?php

    session_start();

    include_once("valida-permanenciaAdm.php");

	require_once("../model/PrestadorServico.php");

  try
{
    $conexao = new PDO("mysql:host=localhost;
    dbname=atualizadotcc", 
    "root",
    "");
}
catch(PDOException $e)
{
    throw new PDOException($e);
} 

	
	try {
	  $prestadorServico = new PrestadorServico();

	  
	  $listaprestadorservico = $prestadorServico->listar();

	} catch (Exception $e) {
	  echo $e->getMessage();
	}
	
	require_once("../model/PrestadorServico.php"); // chamando por causa da FK
	
	
	try {
	  
	  $prestadorServico  = new PrestadorServico();

	  $listaprestadorServico = $prestadorServico->listar();
	} catch (Exception $e) {
	  echo $e->getMessage();
	}


	require_once("../model/PrestadorServico.php"); // chamando por causa da FK
	
	
	try {


	  $prestadorServico  = new PrestadorServico();

	} catch (Exception $e) {
	  echo $e->getMessage();
	}


	require_once("../model/PrestadorServico.php"); // chamando por causa da FK
	
	try {

	  $prestadorServico  = new PrestadorServico(); //FK
	
	  $listaprestadorservico = $prestadorServico->listar(); //FK
	} catch (Exception $e) {
	  echo $e->getMessage();
	}
	

	require_once("../model/PrestadorServico.php"); // chamando por causa da FK
	
	try {

	  $prestadorServico  = new PrestadorServico();
	

	  $listaprestadorServico = $prestadorServico->listar(); // Para FK
	
	} catch (Exception $e) {
	  echo $e->getMessage();
	}
	
	require_once("../model/Postagem.php");
	require_once("../model/PrestadorServico.php"); // chamando por causa da FK
	
	
	try {
	  $postagem = new Postagem();
	  $prestadorServico  = new PrestadorServico(); //FK
	
	  $listapostagem = $postagem->listar();
	  $listaprestadorservico = $prestadorServico->listar(); //FK
	
	} catch (Exception $e) {
	  echo $e->getMessage();
	}

	  require_once("../model/Postagem.php"); // chamando por causa da FK
	  
	  
	  try {

		$postagem = new Postagem();
		$listapostagem = $postagem->listar();
	  } catch (Exception $e) {
		echo $e->getMessage();
	  }

	  require_once("../model/Postagem.php"); // chamando por causa da FK
	  
	  
	  try {
		$postagem = new Postagem();

		$listapostagem = $postagem->listar();
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



			
 
  <div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Lista Postagem</h3>
						 <!--FORMULÁRIO SISTEMA DE BUSCA-->
						 <form class="d-flex" role="search" action="../buscas/pesquisa-postagem.php" method="post">
          				  <input class="form-control me-2" type="search" placeholder="Pesquisar por nome do prestador" aria-label="Search" name="txtNome" id="txtNome">
							<button class="btn btn-outline-danger" type="submit"> <i class='bx bx-search' ></i> </button>
						</form>
      					<!--FORMULÁRIO SISTEMA DE BUSCA-->
                <form class="d-flex" role="search" action="../relatorios/relatorio-postagem.php" method="post">
				<button  class="btn btn-outline-danger" type="submit">Relatório
				<i class='bx bxs-cloud-download' ></i>
        </form>
				</button>

				<form class = "d-flex" role="search">
<a class="btn btn-outline-danger" href="perfilPostagens.php" role="button">Veja com mais detalhes</a>
</form>

					</div>
					<div id="container">
    <table>
      <thead>
        <tr>
          <th>Código</th>
          <th>Descrição</th>
		  <th>Título</th>
		  <th>Data</th>
          <th>Nome Prestador</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($listapostagem as $key => $listar) { ?>
          <tr>

            <td><?php echo $codPostagem = $listar['codPostagem'] ?></td> <!--Variavel do model e atributos do banco -->

            <td><?php echo $descricaoPostagem = $listar['descricaoPostagem'] ?></td>

			<td><?php echo $tituloPostagem = $listar['tituloPostagem'] ?></td>

			<td><?php echo $dataPostagem = $listar['dataPostagem'] ?></td>

            <td><?php echo $codPrestadorServico = $listar['nomePrestadorServico'] ?></td> <!--FK-->
            
            <?php
              $teste = array();

              array_push($teste, $codPostagem);
            ?>

            <?php $descricaoPostagem = $listar['descricaoPostagem'] ?> 
			<?php $tituloPostagem = $listar['tituloPostagem'] ?>
			<?php $dataPostagem = $listar['dataPostagem'] ?>
            <?php $codPrestadorServico = $listar['nomePrestadorServico'] ?> <!--FK-->
            
            </form>
          </tr>

          
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Alterar dados</h5>
                  <button type="button" class="btn-close" id="botao" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                      <label for="exampleInputEmail1" class="form-label">Código Postagem</label>
                      <input type="text" class="form-control" id="txtPostagem" name="txtPostagem" value="<?php echo ($linha) ?>">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Descrição</label>
                      <input type="text" class="form-control" id="txtDescricao" name="txtDescricao" value=<?php echo ($descricaoPostagem) ?>>
                    </div>

					<div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Título</label>
                      <input type="text" class="form-control" id="txtTitulo" name="txtTitulo" value=<?php echo ($tituloPostagem) ?>>
                    </div>

					<div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Data</label>
                      <input type="text" class="form-control" id="txtData" name="txtData" value=<?php echo ($dataPostagem) ?>>
                    </div>

					<div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nome Prestador</label>
                      <input type="text" class="form-control" id="prestadorServico" name="prestadorServico" value=<?php echo ($codPrestadorServico) ?>> <!--FK-->
                    </div>

                  </form>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-light" id="botao2">Salvar alterações</button>

                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Alterar dados</h5>
                  <button type="button" class="btn-close" id="botao" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                  <form method="post" action="decisao-editarPostagem.php"> <!--FORM ACTIONS-->
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Código Postagem</label>
                      <input type="text" class="form-control" id="txtPostagem" name="txtPostagem" value="<?php echo ($codPostagem) ?>">
                    </div>

                  

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Descrição</label>
                      <input type="text" class="form-control" id="txtDescricao" name="txtDescricao" value=<?php echo ($descricaoPostagem) ?>>
                    </div>

					<div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Titulo</label>
                      <input type="text" class="form-control" id="txtTitulo" name="txtTitulo" value=<?php echo ($tituloPostagem) ?>>
                    </div>

					<div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Data</label>
                      <input type="text" class="form-control" id="txtData" name="txtData" value=<?php echo ($dataPostagem) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nome Prestador</label>
                      <input type="text" class="form-control" id="prestadorServico" name="prestadorServico" value=<?php echo ($codPrestadorServico) ?>>
                    </div>

                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-light" id="botao2">Salvar alterações</button>

                </div>
              </div>
            </div>
          <?php } ?>



      </tbody>
    </table>
  </div>
  </div>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

    <script src="../js/dash.js" defer></script></body>
</html>
