<?php
include('../adm/Conexao.php');
    $query_prestador = "SELECT COUNT(codPrestadorServico) AS qnt_cadastroP  FROM tbPrestadorServico  where codPrestadorServico ";
    $result_prestador = $pdo->prepare($query_prestador);
    $result_prestador->execute();
   $row_prestador = $result_prestador->fetch(PDO::FETCH_ASSOC);

   $query_usuario = "SELECT COUNT(codUsuario) AS qnt_cadastroU  FROM tbUsuario";
   $result_usuario = $pdo->prepare($query_usuario);
   $result_usuario->execute();
  $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);

    $query_especialidade = "SELECT COUNT(codEspecialidade) AS qnt_cadastroE  FROM tbEspecialidade";
    $result_especialidade = $pdo->prepare($query_especialidade);
    $result_especialidade->execute();
    $row_especialidade = $result_especialidade->fetch(PDO::FETCH_ASSOC);

    $query_postagem = "SELECT COUNT(codPostagem) AS qnt_cadastroPo  FROM tbPostagem";
    $result_postagem = $pdo->prepare($query_postagem);
    $result_postagem->execute();
    $row_postagem = $result_postagem->fetch(PDO::FETCH_ASSOC);

    $query_comentario = "SELECT COUNT(codComentario) AS qnt_cadastroCo  FROM tbComentario";
    $result_comentario = $pdo->prepare($query_comentario);
    $result_comentario->execute();
    $row_comentario = $result_comentario->fetch(PDO::FETCH_ASSOC);

    $query_telefoneusuario = "SELECT COUNT(codTelefoneUsuario) AS qnt_cadastroUser  FROM tbTelefoneUsuario";
    $result_telefoneusuario = $pdo->prepare($query_telefoneusuario);
    $result_telefoneusuario->execute();
    $row_telefoneusuario = $result_telefoneusuario->fetch(PDO::FETCH_ASSOC);

    $query_telefoneprestador = "SELECT COUNT(codTelefonePrestadorServico) AS qnt_cadastroPrestador  FROM tbTelefonePrestadorServico";
    $result_telefoneprestador = $pdo->prepare($query_telefoneprestador);
    $result_telefoneprestador->execute();
    $row_telefoneprestador = $result_telefoneprestador->fetch(PDO::FETCH_ASSOC);

    $query_avaliacao = "SELECT COUNT(codAvaliacao) AS qnt_cadastroAv  FROM tbAvaliacao";
    $result_avaliacao = $pdo->prepare($query_avaliacao);
    $result_avaliacao->execute();
    $row_avaliacao = $result_avaliacao->fetch(PDO::FETCH_ASSOC);

    $query_horarios = "SELECT COUNT(codHorario) AS qnt_cadastroHo  FROM tbHorario";
    $result_horarios = $pdo->prepare($query_horarios);
    $result_horarios->execute();
    $row_horarios = $result_horarios->fetch(PDO::FETCH_ASSOC);
?>

<!-- INICIO DE BLOCOS 3 QUARADOS -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<ul class="box-info">
    <li>
        <span class="text">
            <h3>Prestadores</h3>
            <h2><?php echo"" .$row_prestador['qnt_cadastroP']. "";     
?></h2>
        </span>
    </li>
    <li>
        
        <span class="text">
            <h3>Clientes</h3>
            <h2><?php echo "" .$row_usuario['qnt_cadastroU']. ""; 
 
?></h2>
        </span>
    </li>
    
    <li>
        
        <span class="text">
            <h3>Especialidade</h3>
            <h2><?php echo "" .$row_especialidade['qnt_cadastroE']. ""; ?></h2>
        </span>
    </li>

 <li>
        
        <span class="text">
            <h3>Postagens</h3>
            <h2><?php echo "" .$row_postagem['qnt_cadastroPo']. ""; ?></h2>
        </span>
    </li>

    <li>
       
        <span class="text">
            <h3>Telefone Prestadores</h3>
            <h2><?php echo "" .$row_telefoneprestador['qnt_cadastroPrestador']. ""; ?></h2>
        </span>
    </li>

    
      <li>
        
        <span class="text">
            <h3>Telefone Clientes</h3>
            <h2><?php echo "" .$row_telefoneusuario['qnt_cadastroUser']. ""; ?></h2>
        </span>
    </li>

     <li>
       
        <span class="text">
            <h3>Avaliações</h3>
            <h2><?php echo "" .$row_avaliacao['qnt_cadastroAv']. ""; ?></h2>
        </span>
    </li>

    
    <li>
        
        <span class="text">
            <h3>Comentários</h3>
            <h2><?php echo "" .$row_comentario['qnt_cadastroCo']. ""; ?></h2>
        </span>
    </li>

<li>
    <span class="text">
            <h3>Horários</h3>
            <h2><?php echo "" .$row_horarios['qnt_cadastroHo']. ""; ?></h2>
        </span>
    </li>


</body>
</html>

