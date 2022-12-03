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
	require_once("../model/TelefonePrestador.php");
	require_once("../model/PrestadorServico.php"); // chamando por causa da FK
	
	
	try {
	  $telefonePrestador = new TelefonePrestador();
	  $prestadorServico  = new PrestadorServico();
	
	
	  $listatelefoneprestador = $telefonePrestador->listar();
	  $listaprestadorServico = $prestadorServico->listar();
	} catch (Exception $e) {
	  echo $e->getMessage();
	}
	
	require_once("../model/Especialidade.php");
// chamando por causa da FK
	
	try {
	  $especialidade = new Especialidade();

	  $listaespecialidade = $especialidade->listar();

	
	} catch (Exception $e) {
	  echo $e->getMessage();
	}
	
	require_once("../model/Especialidade.php"); // chamando por causa da FK
	require_once("../model/PrestadorServico.php"); // chamando por causa da FK
	
	
	try {

	  $especialidade  = new Especialidade();
	  $prestadorServico  = new PrestadorServico();
	  $listaespecialidade = $especialidade->listar(); // Para FK

	} catch (Exception $e) {
	  echo $e->getMessage();
	}

	require_once("../model/Horario.php");
	require_once("../model/PrestadorServico.php"); // chamando por causa da FK
	
	try {
	  $horario = new Horario();
	  $prestadorServico  = new PrestadorServico(); //FK
	
	  $listahorario = $horario->listar();
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
						<h3>Lista Prestadores</h3>
            <!--FORMULÁRIO SISTEMA DE BUSCA-->
        <form class="d-flex" role="search" action="../buscas/pesquisa-prestador.php" method="post">
            <input class="form-control me-2" type="search" placeholder="Pesquisar por nome" aria-label="Search" name="txtNome" id="txtNome">
            <button class="btn btn-outline-danger" type="submit"> <i class='bx bx-search' ></i> </button>
          </form><!--BOTÃO RELATÓRIO-->
          

<form class="d-flex" role="search" action="../relatorios/relatorio-prestador.php" method="post">
<button  class="btn btn-outline-danger" type="submit">Relatório
<i class='bx bxs-cloud-download' ></i>
  </form>
</button>

<form class = "d-flex" role="search">
<a class="btn btn-outline-danger" href="perfilPrestador.php" role="button">Veja com mais detalhes</a>
</form>
      <!--FORMULÁRIO SISTEMA DE BUSCA-->
					</div>
					<div id="container">



              <!-------- exibe apenas o usuario logado ------>

            






    <table>
    <thead>
        <tr>
          <th>Código</th>

          <th>Nome</th>
          <th>CNPJ</th>
          <th>Email</th>
          <th>Img</th>
          <th>Logradouro</th>
          <th>Complemento</th>
          <th>CEP</th>
          <th>Bairro</th>
          <th>Cidade</th>
          <th>UF</th>
        
        </tr>
      </thead>

      <tbody>
        <?php foreach ($listaprestadorservico as $key => $listar) { ?>
            <tr>
                    <td><?php echo $codPrestadorServico = $listar['codPrestadorServico'] ?></td>
                    <td><?php echo $nomePrestadorServico = $listar['nomePrestadorServico'] ?></td>
                    <td><?php echo $cnpjPrestadorServico = $listar['cnpjPrestadorServico'] ?></td>
                    <td><?php echo $emailPrestadorServico = $listar['emailPrestadorServico'] ?></td>
                    <td><?php echo $imgPrestadorServico = $listar['imgPrestadorServico'] ?></td>
                    <td><?php echo $logradouroPrestadorServico = $listar['logradouroPrestadorServico'] ?></td>
                    <td><?php echo $complementoPrestadorServico = $listar['complementoPrestadorServico'] ?></td>
                    <td><?php echo $cepPrestadorServico = $listar['cepPrestadorServico'] ?></td>
                    <td><?php echo $bairroPrestadorServico = $listar['bairroPrestadorServico'] ?></td>
                    <td><?php echo $cidadePrestadorServico = $listar['cidadePrestadorServico'] ?></td>
                    <td><?php echo $uf = $listar['uf'] ?></td> <!--NOVO-->

            <?php

              $teste = array();

              array_push($teste, $nomePrestadorServico, $codPrestadorServico);
            ?>

             

                    <?php  $nomePrestadorServico = $listar['nomePrestadorServico'] ?>
                    <?php  $cnpjPrestadorServico = $listar['cnpjPrestadorServico'] ?>
                    <?php  $emailPrestadorServico = $listar['emailPrestadorServico'] ?>
                    
                    <?php  $imgPrestadorServico = $listar['imgPrestadorServico'] ?>
                    <?php  $logradouroPrestadorServico = $listar['logradouroPrestadorServico'] ?>
                    <?php  $complementoPrestadorServico = $listar['complementoPrestadorServico'] ?>
                    <?php  $cepPrestadorServico = $listar['cepPrestadorServico'] ?>
                    <?php  $bairroPrestadorServico = $listar['bairroPrestadorServico'] ?>
                    <?php  $cidadePrestadorServico = $listar['cidadePrestadorServico'] ?>
                    <?php  $uf = $listar['uf'] ?> <!--NOVO-->

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
                      <label for="exampleInputEmail1" class="form-label">ID</label>
                      <input type="text" class="form-control" id="txtNomePrestador" name="txtNomePrestador" value="<?php echo ($linha) ?>">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nome Prestador</label>
                      <input type="text" class="form-control" id="txtNomePrestador" name="txtNomePrestador" value=<?php echo ($nomePrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">CNPJ</label>
                      <input type="text" class="form-control" id="txtCpnjPrestador" name="txtCpnjPrestador" value=<?php echo ($cnpjPrestadorServico) ?>>
                    </div>
            
                <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                      <input type="text" class="form-control" id="txtEmailPrestador" name="txtEmailPrestador" value=<?php echo ($emailPrestadorServico) ?>>
                    </div>

                   

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Imagem</label>
                      <input type="text" class="form-control" id="txtImagemPrestador" name="txtImagemPrestador" value=<?php echo ($imgPrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Logradouro</label>
                      <input type="text" class="form-control" id="txtLogradouroPrestador" name="txtLogradouroPrestador" value=<?php echo ($logradouroPrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Complemento</label>
                      <input type="text" class="form-control" id="txtComplementoPrestador" name="txtComplementoPrestador" value=<?php echo ($complementoPrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">CEP</label>
                      <input type="text" class="form-control" id="txtCepPrestador" name="txtCepPrestador" value=<?php echo ($cepPrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Bairro</label>
                      <input type="text" class="form-control" id="txtBairroPrestador" name="txtBairroPrestador" value=<?php echo ($bairroPrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Cidade</label>
                      <input type="text" class="form-control" id="txtCidadePrestador" name="txtCidadePrestador" value=<?php echo ($cidadePrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">UF</label>
                      <input type="text" class="form-control" id="txtUf" name="txtUf" value=<?php echo ($uf) ?>>
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
                  
                  <form method="post" action="decisao-editarPrestador.php"> <!--FORM ACTION -->
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ID</label>
                      <input type="text" class="form-control" id="txtNomePrestador" name="txtNomePrestador" value="<?php echo ($codPrestadorServico) ?>">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nome Prestador</label>
                      <input type="text" class="form-control" id="txtNomePrestador" name="txtNomePrestador" value=<?php echo ($nomePrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">CNPJ</label>
                      <input type="text" class="form-control" id="txtCpnjPrestador" name="txtCpnjPrestador" value=<?php echo ($cnpjPrestadorServico) ?>>
                    </div>
                  </form>
                </div>

                <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                      <input type="text" class="form-control" id="txtEmailPrestador" name="txtEmailPrestador" value=<?php echo ($emailPrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Senha</label>
                      <input type="text" class="form-control" id="txtSenhaPrestador" name="txtSenhaPrestador" value=<?php echo ($senhaPrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Imagem</label>
                      <input type="text" class="form-control" id="txtImagemPrestador" name="txtImagemPrestador" value=<?php echo ($imgPrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Logradouro</label>
                      <input type="text" class="form-control" id="txtLogradouroPrestador" name="txtLogradouroPrestador" value=<?php echo ($logradouroPrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Complemento</label>
                      <input type="text" class="form-control" id="txtComplementoPrestador" name="txtComplementoPrestador" value=<?php echo ($complementoPrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">CEP</label>
                      <input type="text" class="form-control" id="txtCepPrestador" name="txtCepPrestador" value=<?php echo ($cepPrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Bairro</label>
                      <input type="text" class="form-control" id="txtBairroPrestador" name="txtBairroPrestador" value=<?php echo ($bairroPrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Cidade</label>
                      <input type="text" class="form-control" id="txtCidadePrestador" name="txtCidadePrestador" value=<?php echo ($cidadePrestadorServico) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">UF</label>
                      <input type="text" class="form-control" id="txtUf" name="txtUf" value=<?php echo ($uf) ?>>
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
  <div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Lista Horários</h3>
<!--FORMULÁRIO SISTEMA DE BUSCA-->
<form class="d-flex" role="search" action="../buscas/pesquisa-horario.php" method="post">
            <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search" name="txtNome" id="txtNome">
            <button class="btn btn-outline-danger" type="submit"> <i class='bx bx-search' ></i> </button>
          </form>
      <!--FORMULÁRIO SISTEMA DE BUSCA-->
      <form class="d-flex" role="search" action="../relatorios/relatorio-horario.php" method="post">
				<button  class="btn btn-outline-danger" type="submit">Relatório
				<i class='bx bxs-cloud-download' ></i>
				</button>
					</div>
					<div id="container">
    <table>
	<thead>
        <tr>
          <th>Código</th>
          <th>Dias</th>
          <th>Abertura</th>
          <th>Fechamento</th>
          <th>Nome Prestador</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($listahorario as $key => $listar) { ?>
          <tr>

            <td><?php echo $codHorario = $listar['codHorario'] ?></td>

            <td><?php echo $diaSemanaHorario = $listar['diaSemanaHorario'] ?></td>

            <td><?php echo $aberturaHorario = $listar['aberturaHorario'] ?></td>

            <td><?php echo $fechamentoHorario = $listar['fechamentoHorario'] ?></td>

            <td><?php echo $codPrestadorServico = $listar['nomePrestadorServico'] ?></td> <!--FK-->

            <?php
              $teste = array();

              array_push($teste, $diaSemanaHorario, $aberturaHorario, $fechamentoHorario, $codHorario);
            ?>
    
            
            <?php $diaSemanaHorario = $listar['diaSemanaHorario'] ?>
            <?php  $aberturaHorario = $listar['aberturaHorario'] ?>
            <?php $fechamentoHorario = $listar['fechamentoHorario'] ?>
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
                      <label for="exampleInputEmail1" class="form-label">ID</label>
                      <input type="text" class="form-control" id="txtDiaSemanaHorario" name="txtDiaSemanaHorario" value="<?php echo ($linha) ?>">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Dias da Semana</label>
                      <input type="text" class="form-control" id="txtNoDiaSemanaHorario" name="txtDiaSemanaHorario" value=<?php echo ($diaSemanaHorario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Horario Abertura</label>
                      <input type="text" class="form-control" id="txtHorarioAbertura" name="txtHorarioAbertura" value=<?php echo ($aberturaHorario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Fechamento Horario</label>
                      <input type="text" class="form-control" id="txtFechamentoHorario" name="txtFechamentoHorario" value=<?php echo ($fechamentoHorario) ?>>
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
                  <form method="post" action="./decisao-editarHorario.php">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Código Especialidade</label>
                      <input type="text" class="form-control" id="txtDiaSemanaHorario" name="txtDiaSemanaHorario" value="<?php echo ($codHorario) ?>">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Dias da Semana</label>
                      <input type="text" class="form-control" id="txtDiaSemanaHorario" name="txtDiaSemanaHorario" value="<?php echo ($diaSemanaHorario) ?>">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Abertura Horário</label>
                      <input type="text" class="form-control" id="txtAberturaHorario" name="txtAberturaHorario" value=<?php echo ($aberturaHorario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Fechamento Horario</label>
                      <input type="text" class="form-control" id="txtFechamentoHorario" name="txtFechamentoHorario" value=<?php echo ($fechamentoHorario) ?>>
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
  </div>

  

				
				<div class="order">
					<div class="head">
						<h3>Lista Telefone Prestador</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<div id="container">
    <table>
      <thead>
        <tr>
          <th>Código Telefone</th>
          <th>Número</th>
          <th>Nome Prestador</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($listatelefoneprestador as $key => $listar) { ?>
          <tr>

            <td><?php echo $codTelefonePrestadorServico = $listar['codTelefonePrestadorServico'] ?></td>

            <td><?php echo $numeroTelefonePrestadorServico = $listar['numeroTelefonePrestadorServico'] ?></td>

            <td><?php echo $codPrestadorServico = $listar['nomePrestadorServico'] ?></td>
            
            <?php
              $teste = array();

              array_push($teste, $numeroTelefonePrestadorServico, $codTelefonePrestadorServico);
            ?>


             
            <?php $numeroTelefonePrestadorServico = $listar['numeroTelefonePrestadorServico'] ?>
            <?php $codPrestadorServico = $listar['nomePrestadorServico'] ?>
            
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
                      <label for="exampleInputEmail1" class="form-label">Código Telefone</label>
                      <input type="text" class="form-control" id="txtNumero" name="txtNumero" value="<?php echo ($linha) ?>">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Número</label>
                      <input type="text" class="form-control" id="txtNumero" name="txtNumero" value=<?php echo ($numeroTelefonePrestadorServico) ?>>
                    </div>

                    <select name="prestadorServico">
                        <option value="0">Selecione</option>
                        <?php foreach ($listaprestadorServico as $listar){ ?>
                            <option value="<?php echo $listar['codPrestadorServico'] ?>">
                                <?php echo $listar['codPrestadorServico'] ?>
                            </option>
                        <?php } ?>
                    </select>

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

                  <form method="post" action="decisao-editarTelefonePrestador.php">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Código Telefone</label>
                      <input type="text" class="form-control" id="txtNumero" name="txtNumero" value="<?php echo ($codTelefonePrestadorServico) ?>">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Número</label>
                      <input type="text" class="form-control" id="txtNumero" name="txtNumero" value=<?php echo ($numeroTelefonePrestadorServico) ?>>
                    </div>

                    <select name="prestadorServico">
                        <option value="0">Selecione</option>
                        <?php foreach ($listaprestadorServico as $listar){ ?>
                            <option value="<?php echo $listar['codPrestadorServico'] ?>">
                                <?php echo $listar['codPrestadorServico'] ?>
                            </option>
                        <?php } ?>
                    </select>

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
  <div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Lista Especialidade </h3>
						 <!--FORMULÁRIO SISTEMA DE BUSCA-->
						 <form class="d-flex" role="search" action="../buscas/pesquisa-especialidade.php" method="post">
            <input class="form-control me-2" type="search" placeholder="Pesquisar por nome da especialidade" aria-label="Search" name="txtNomeEspecialidade" id="txtNomeEspecialidade">
            <button class="btn btn-outline-danger" type="submit"> <i class='bx bx-search' ></i> </button>
          </form>
      <!--FORMULÁRIO SISTEMA DE BUSCA-->
      	<!--BOTÃO RELATÓRIO-->

				<form class="d-flex" role="search" action="../relatorios/relatorio-especialidade.php" method="post">
				<button  class="btn btn-outline-danger" type="submit">Relatório
				<i class='bx bxs-cloud-download' ></i>
        </form>

				</button>
					</div>
          <div id="container">





          <table>
	<thead>
        <tr>
        <th>Código</th>
          <th>Nome</th>
          <th>Espécie</th>
          <th>Código Prestador</th>
        </tr>
      </thead>
          <?php
                            //$consul =$_POST['consulta'];
                    
                           
                               //$pesquisa = $_POST["consulta"];
                           global $conexao;
                                $stmt1 = $pdo->prepare( "SELECT 
                                 codEspecialidade ,nomeEspecialidade,especieEspecialidade, tbPrestadorServico.codPrestadorServico
                                FROM tbEspecialidade  inner join tbPrestadorServico on tbEspecialidade.codPrestadorServico = tbPrestadorServico.codPrestadorServico
                               ");
                                 $stmt1 ->execute();

                             
                                    while($row1 = $stmt1 ->fetch(PDO::FETCH_NUM)){
                                        echo ("<tr>");
                                        echo '<td width="60px">';
                                        echo (" " . $row1[0] . " ");
                                        echo '</td>';
                                        echo "<td>";
                                      
                                        echo " " .$row1[1]; 
                                        echo "<td>". $row1[2]."</td>";
                                        echo "<td>". $row1[3]."</td>";

                                        
                                      
                                        /* <span>'. $row1[11]. '</span>'; */ 

                                        


                                    
                                    }
                                        echo "</tr>";
                                    echo '</td>';
                                echo ('</tr>');

                                            
                        ?>
                        </tbody>                        
                        </table>
                        <!---------------------------------------------------------------------------->
   




    
          
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Alterar dados</h5>
                  <button type="button" class="btn-close" id="botao" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                      <label for="exampleInputEmail1" class="form-label">ID</label>
                      <input type="text" class="form-control" id="txtNomeEspecialidade" name="txtNomeEspecialidade" value="<?php echo ($linha) ?>">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nome Especialidade</label>
                      <input type="text" class="form-control" id="txtNomeEspecialidade" name="txtNomeEspecialidade" value=<?php echo ($nomeEspecialidade) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Especie Especialidade</label>
                      <input type="email" class="form-control" id="txtEspecieEspecialiadade" name="txtEspecieEspecialiadade" value=<?php echo ($especieEspecialidade) ?>>
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
                  <form method="post" action="decisao-editarEspecialidade.php">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Código Especialidade</label>
                      <input type="text" class="form-control" id="txtNomeEspecialidade" name="txtNomeEspecialidade" value="<?php echo ($codEspecialidade) ?>">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nome Especialidade</label>
                      <input type="text" class="form-control" id="txtNomeEspecialidade" name="txtNomeEspecialidade" value=<?php echo ($nomeEspecialidade) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Especie Especialidade</label>
                      <input type="text" class="form-control" id="txtEspecieEspecialidade" name="txtEspecieEspecialidade" value=<?php echo ($especieEspecialidade) ?>>
                    </div>

                   

                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-light" id="botao2">Salvar alterações</button>

                </div>
              </div>
            </div>
         

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
					</div>
					<div id="container">
    <table>
      <thead>
        <tr>
          <th>Código Postagem</th>
          <th>Curtida</th>
          <th>Descrição</th>
          <th>Nome Prestador</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($listapostagem as $key => $listar) { ?>
          <tr>

            <td><?php echo $codPostagem = $listar['codPostagem'] ?></td> <!--Variavel do model e atributos do banco -->

            <td><?php echo $descricaoPostagem = $listar['descricaoPostagem'] ?></td>

            <td><?php echo $codPrestadorServico = $listar['nomePrestadorServico'] ?></td> <!--FK-->
            
            <?php
              $teste = array();

              array_push($teste, $nomePrestadorServico, $codPostagem);
            ?>

            <?php $descricaoPostagem = $listar['descricaoPostagem'] ?> <!--FK-->
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
  </div>
  
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

    <script src="../js/dash.js" defer></script></body>
</html>
