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

	require_once("../model/Usuario.php");

	try {
	  $usuario = new Usuario();
	
	  
	  if(isset($_SESSION['codUsuario'])){
		$perfilUser = $usuario->getUsuario($_SESSION['codUsuario']);
	  }
	
	  $listausuario = $usuario->listar();
	} catch (Exception $e) {
	  echo $e->getMessage();
	}
	
	require_once("../model/TelefoneUsuario.php");
	require_once("../model/Usuario.php"); // chamando por causa da FK
	
	
	try {
	  $telefoneUsuario = new TelefoneUsuario();
	  $usuario  = new Usuario();
	
	  $listatelefoneusuario = $telefoneUsuario->listar();
	  $listausuario = $usuario->listar();
	} catch (Exception $e) {
	  echo $e->getMessage();
	}
	
	try {
	
		$perfilUser = ''; //Sumiu warning  de variavel indefinida
	
		$usuario = new Usuario();
	
		if (isset($_SESSION['codUsuario'])) {
		  $perfilUser = $usuario->getUsuario($_SESSION['codUsuario']);
		}
	
	  } catch (Exception $e) {
		echo $e->getMessage();
	  }
	
	  require_once("../model/Usuario.php"); // chamando por causa da FK
	 
	  try {
		
		$usuario  = new Usuario();
	
		$listausuario = $usuario->listar();
		
	  } catch (Exception $e) {
		echo $e->getMessage();
	  }
	
	  require_once("../model/Usuario.php"); // chamando por causa da FK

	  try {

		$usuario  = new Usuario();
		$listausuario = $usuario->listar();
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
						<h3>Lista Usuário</h3>
            <!--FORMULÁRIO SISTEMA DE BUSCA-->
        <form class="d-flex" role="search" action="../buscas/pesquisa-usuario.php" method="post">
            <input class="form-control me-2" type="search" placeholder="Pesquisar por nome" aria-label="Search" name="txtNomeUsuario" id="txtNomeUsuario">
            <button class="btn btn-outline-danger" type="submit"> <i class='bx bx-search' ></i> </button>
          </form>
          <!--FORMULÁRIO SISTEMA DE BUSCA-->
		  <form class="d-flex" role="search" action="../relatorios/relatorio-usuario.php" method="post">
				<button  class="btn btn-outline-danger" type="submit">Relatório
				<i class='bx bxs-cloud-download' ></i>
		</form>
				</button>

        <form class = "d-flex" role="search">
<a class="btn btn-outline-danger" href="perfilCliente.php" role="button">Veja com mais detalhes</a>
</form>

					</div>
					<div id="container">
    <table>
    <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Data</th>
          <th>Gênero</th>
          <th>CPF</th>
          <th>Email</th>
          
          
          <th>Logradouro</th>
          <th>Complemento</th>
          <th>CEP</th>
          <th>Bairro</th>
          <th>Cidade</th>
          <th>UF</th>
        </tr>
      </thead>

      <tbody>
      <?php foreach ($listausuario as $key => $listar) { ?>
            <tr>
                    <td><?php echo $codUsuario = $listar['codUsuario'] ?></td>
                    <td><?php echo $nomeUsuario = $listar['nomeUsuario'] ?></td>
                    <td><?php echo $dataNascUsuario = $listar['dataNascUsuario'] ?></td>
                    <td><?php echo $sexoUsuario = $listar['sexoUsuario'] ?></td>
                    <td><?php echo $cpfUsuario = $listar['cpfUsuario'] ?></td>
                    <td><?php echo $emailUsuario = $listar['emailUsuario'] ?></td>
               
                  
                    <td><?php echo $logradouroUsuario = $listar['logradouroUsuario'] ?></td>
                    <td><?php echo $complementoUsuario = $listar['complementoUsuario'] ?></td>
                    <td><?php echo $cepUsuario = $listar['cepUsuario'] ?></td>
                    <td><?php echo $bairroUsuario = $listar['bairroUsuario'] ?></td>
                    <td><?php echo $cidadeUsuario = $listar['cidadeUsuario'] ?></td>
                    <td><?php echo $uf = $listar['uf'] ?></td>
                    
            <?php

              $teste = array();

              array_push($teste, $nomeUsuario, $codUsuario);
            ?>




            <?php $nomeUsuario = $listar['nomeUsuario'] ?>
            <?php $dataNascUsuario = $listar['dataNascUsuario'] ?>
            <?php $sexoUsuario = $listar['sexoUsuario'] ?>
            <?php $cpfUsuario = $listar['cpfUsuario'] ?>
            <?php $emailUsuario = $listar['emailUsuario'] ?>
          
            <?php $imagemUsuario = $listar['imagemUsuario'] ?>
            <?php $logradouroUsuario = $listar['logradouroUsuario'] ?>
            <?php $complementoUsuario = $listar['complementoUsuario'] ?>
            <?php $cepUsuario = $listar['cepUsuario'] ?>
            <?php $bairroUsuario = $listar['bairroUsuario'] ?>
            <?php $cidadeUsuario = $listar['cidadeUsuario'] ?>
            <?php $uf = $listar['uf'] ?>

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
                      <input type="text" class="form-control" id="txtNomeUsuario" name="txtNomeUsuario" value="<?php echo ($linha) ?>">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nome Usuário</label>
                      <input type="text" class="form-control" id="txtNomeUsuario" name="txtNomeUsuario" value=<?php echo ($nomeUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Data</label>
                      <input type="date" class="form-control" id="txtData" name="txtData" value=<?php echo ($dataNascUsuario) ?>>
                    </div>
                  </form>
                </div>

                <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Genero</label>
                      <input type="text" class="form-control" id="txtSexoUsuario" name="txtSexoUsuario" value=<?php echo ($sexoUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">CPF</label>
                      <input type="text" class="form-control" id="txtCpfUsuario" name="txtCpfUsuario" value=<?php echo ($cpfUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                      <input type="text" class="form-control" id="txtEmailUsuario" name="txtEmailUsuario" value=<?php echo ($emailUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Senha</label>
                      <input type="text" class="form-control" id="txtSenhaUsuario" name="txtSenhaUsuario" value=<?php echo ($senhaUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Imagem</label>
                      <input type="text" class="form-control" id="txtImagemUsuario" name="txtImagemUsuario" value=<?php echo ($imagemUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Logradouro</label>
                      <input type="text" class="form-control" id="txtLogradouroUsuario" name="txtLogradouroUsuario" value=<?php echo ($logradouroUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Complemento</label>
                      <input type="text" class="form-control" id="txtComplementoUsuario" name="txtComplementoUsuario" value=<?php echo ($complementoUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">CEP</label>
                      <input type="text" class="form-control" id="txtCepUsuario" name="txtCepUsuario" value=<?php echo ($cepUsuario) ?>>
                    </div>


                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Bairro</label>
                      <input type="text" class="form-control" id="txtBairroUsuario" name="txtBairroUsuario" value=<?php echo ($bairroUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Cidade</label>
                      <input type="text" class="form-control" id="txtCidadeUsuario" name="txtCidadeUsuario" value=<?php echo ($cidadeUsuario) ?>>
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
                  
                  <form method="post" action="decisao-editarUsuario.php">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Código</label>
                      <input type="text" class="form-control" id="txtNomeUsuario" name="txtNomeUsuario" value="<?php echo ($codUsuario) ?>">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nome</label>
                      <input type="text" class="form-control" id="txtNomeUsuario" name="txtNomeUsuario" value=<?php echo ($nomeUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Data</label>
                      <input type="text" class="form-control" id="txtData" name="txtData" value=<?php echo ($dataNascUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Genero</label>
                      <input type="text" class="form-control" id="txtSexoUsuario" name="txtSexoUsuario" value=<?php echo ($sexoUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">CPF</label>
                      <input type="text" class="form-control" id="txtCpfUsuario" name="txtCpfUsuario" value=<?php echo ($cpfUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                      <input type="text" class="form-control" id="txtEmailUsuario" name="txtEmailUsuario" value=<?php echo ($emailUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Senha</label>
                      <input type="text" class="form-control" id="txtSenhaUsuario" name="txtSenhaUsuario" value=<?php echo ($senhaUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Imagem</label>
                      <input type="text" class="form-control" id="txtImagemUsuario" name="txtImagemUsuario" value=<?php echo ($imagemUsuario) ?>>
                    </div>


                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Logradouro</label>
                      <input type="text" class="form-control" id="txtLogradouroUsuario" name="txtLogradouroUsuario" value=<?php echo ($logradouroUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Complemento</label>
                      <input type="text" class="form-control" id="txtComplementoUsuario" name="txtComplementoUsuario" value=<?php echo ($complementoUsuario) ?>>
                    </div>


                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">CEP</label>
                      <input type="text" class="form-control" id="txtCepUsuario" name="txtCepUsuario" value=<?php echo ($cepUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Bairro</label>
                      <input type="text" class="form-control" id="txtBairroUsuario" name="txtBairroUsuario" value=<?php echo ($bairroUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Cidade</label>
                      <input type="text" class="form-control" id="txtCidadeUsuario" name="txtCidadeUsuario" value=<?php echo ($cidadeUsuario) ?>>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Cidade</label>
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
      <br><br><br>



  <!--TELEFONE-->
  <div class="table-data">
            <div class="order">
					<div class="head">
						<h3>Lista Telefone Usúario</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<div id="container">
    <table>
    <thead>
        <tr>
          <th>Código Telefone</th>
          <th>Número</th>
          <th>Nome</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($listatelefoneusuario as $key => $listar) { ?>
          <tr>

            <td><?php echo $codTelefoneUsuario = $listar['codTelefoneUsuario'] ?></td>

            <td><?php echo $numeroTelefoneUsuario = $listar['numeroTelefoneUsuario'] ?></td>

            <td><?php echo $codUsuario = $listar['nomeUsuario'] ?></td> <!--FK-->
            
            <?php
              $teste = array();

              array_push($teste, $numeroTelefoneUsuario, $codTelefoneUsuario);
            ?>



            <?php $numeroTelefoneUsuario = $listar['numeroTelefoneUsuario'] ?>
            <?php $codUsuario= $listar['nomeUsuario'] ?> <!--FK-->
            
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
                      <input type="text" class="form-control" id="txtNumero" name="txtNumero" value=<?php echo ($numeroTelefoneUsuario) ?>>
                    </div>

                    <select name="Usuario">
                        <option value="0">Selecione</option>
                        <?php foreach ($listausuario as $listar){ ?>
                            <option value="<?php echo $listar['codUsuario'] ?>">
                                <?php echo $listar['codUsuario'] ?>
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

                  <form method="post" action="decisao-editarTelefonePrestador.php"> <!--FORM ACTION -->
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Código Telefone</label>
                      <input type="text" class="form-control" id="txtNumero" name="txtNumero" value="<?php echo ($codTelefoneUsuario) ?>">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Número</label>
                      <input type="text" class="form-control" id="txtNumero" name="txtNumero" value=<?php echo ($numeroTelefoneUsuario) ?>>
                    </div>

                    <select name="Usuario">
                        <option value="0">Selecione</option>
                        <?php foreach ($listausuario as $listar){ ?>
                            <option value="<?php echo $listar['codUsuario'] ?>">
                                <?php echo $listar['codUsuario'] ?>
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

		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

    <script src="../js/dash.js" defer></script></body>
</html>
