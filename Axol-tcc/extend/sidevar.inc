<?php
include('../adm/Conexao.php');
?>

<!-- SIDEBAR -->
<section id="sidebar">
	<ul class="side-menu top">
		<br><br>

		<li class="active">
			<a href="../loginADM/nav-restritaAdm.php">
				<i class='bx bxs-dashboard' ></i>
				<span class="text">Dashboard</span>
			</a>
		</li>

			

		<li>
			<a href="../loginADM/clientes.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Clientes</span>
			</a>
		</li>

		<li>
			<a href="../loginADM/prestadores.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Prestadores</span>
			</a>
		</li>

		<li>
			<a href="../loginADM/postagens.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Postagens</span>
			</a>
		</li>

		
	
		
<li>		
	<a href="../restrito/graficos.php"> <!--Gráfico de Avaliação-->
				<i class='bx bxs-group' ></i>
				<span class="text">Gráfico-Avaliações</span>
			</a>
		</li>

	
	<ul class="side-menu">
		
		<li >
			<a href="../loginADM/perfilPrestador.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Perfil Prestador</span> <!--Perfil-->
			</a>
		</li>

		<li >
			<a href="../loginADM/perfilCliente.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Perfil Cliente</span> <!--Perfil-->
			</a>
		</li>

		<li >
			<a href="../loginADM/perfilPostagens.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Posts</span> <!--Perfil-->
			</a>
		</li>



		<li>
			<a href="logout.php" class="logout">
				<i class='bx bxs-log-out-circle' ></i>
				<span class="text">Sair</span>
			</a>
		</li>
	</ul>
</section>
<!-- SIDEBAR -->






