<?php
//session_start();
include_once ('../model/Conexao.php');
include_once('../restrito/decisao-editarPrestador.php');
global $conexao;

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



$nome =$_POST['nome'];
$cnpj =$_POST['cnpj'];
$email =$_POST['email'];
$senha =$_POST['senha'];
$logradouro =$_POST['logradouro'];
$complemento=$_POST['complemento'];
$cep =$_POST['cep'];
$bairro =$_POST['bairro'];
$cidade =$_POST['cidade'];
$uf =$_POST['uf'];
$servico= implode(",",$_POST['tipoServico']);






/*
if(strlen($foto['name']) == 0 && strlen($foto['type']) == 0){

    $imagem = $_POST['img'];

} else if(strlen($foto['name']) > 0 && strlen($foto['type']) > 0){

    //- - - | IF PARA VER SE O ARQUIVO DEU ERRO |- - -//
    if($foto['error']){
        die("error");
    }
            
    $nomeArquivo = $foto['name'];

    //Colocando o nome da foto aleatória para não dar conflito no BD & pegando a extensão do arquivo//
    $nomeId = uniqid();
    $ext = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));
    $path = $nomeId . "." . $ext;
            
    move_uploaded_file($foto['tmp_name'], 'imagens/'.$path);

    $imagem = $path;

}
*/

try{
$conexao = Conexao::conectar();
$stmt = $conexao -> prepare ("update tbPrestadorServico set nomePrestadorServico='$nome', emailPrestadorServico='$email',logradouroPrestadorServico='$logradouro', complementoPrestadorServico='$complemento',
                              cepPrestadorServico='$cep', bairroPrestadorServico='$bairro', cidadePrestadorServico='$cidade', uf='$uf', tipoServico='$servico' where emailPrestadorServico like '%$_SESSION[email]%'");
$stmt -> execute();



// echo "<script> alert ('Dados alterados com sucesso'); </script>";
echo "<script> window.location = 'porfile2.php'</script>";
}
catch(PDOException $e){
 echo"Erro " . $e -> getMessage();

 
}











/*
//Verificar se o usuário clicou no botão, clicou no botão acessa o IF e tenta cadastrar, caso contrario acessa o ELSE
$SendEditCont = filter_input(INPUT_POST, 'SendEditCont', FILTER_SANITIZE_STRING);
if($SendEditCont){
    //Receber os dados do formulário
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $cnpj = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    $img = filter_input(INPUT_POST, 'img', FILTER_SANITIZE_STRING);
    $logradouro = filter_input(INPUT_POST, 'logradouro', FILTER_SANITIZE_STRING);
    $complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING);
    $cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
    $bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    
    //Inserir no BD
    $result_msg_cont = "UPDATE tbPrestadorServico SET nomePrestadorServico=:nome, cnpjPrestadorServico=:cnpj, emailPrestadorServico=:email, 
    senhaPrestadorServico=:senha, imgPrestadorServico=:img, logradoutoPrestadorServico=:logradouro, complementoPrestadorServico=:complemento, 
    cepPrestadorServico=:cep, bairroPrestadorServico=:bairro, cidadePrestadorServico=:cidade  WHERE codPrestadorServicol = 16";
    
    $update_msg_cont = $conexao->prepare($result_msg_cont);
    $update_msg_cont->bindParam(':nome', $nome);
    $update_msg_cont->bindParam(':cnpj', $cnpj);
    $update_msg_cont->bindParam(':email', $email);
    $update_msg_cont->bindParam(':senha', $senha);
    $update_msg_cont->bindParam(':img', $img);
    $update_msg_cont->bindParam(':logradouro', $logradouro);
    $update_msg_cont->bindParam(':complemento', $complemento);
    $update_msg_cont->bindParam(':cep', $cep);
    $update_msg_cont->bindParam(':bairro', $bairro);
    $update_msg_cont->bindParam(':cidade', $cidade);
    
    if($update_msg_cont->execute()){
        $_SESSION['msg'] = "<p style='color:green;'>Mensagem editada com sucesso</p>";
        header("Location: decisao-editarPrestador.php");
    }else{
        $_SESSION['msg'] = "<p style='color:red;'>Mensagem não foi editada com sucesso</p>";
        header("Location: decisao-editarPrestador.php");
    }    
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Mensagem não foi editada com sucesso</p>";
    header("Location: decisao-editarPrestador.php");
}
*/
?> 