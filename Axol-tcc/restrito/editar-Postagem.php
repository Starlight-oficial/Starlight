<?php
header("Location: nav-restrita.php");
session_start();

require_once("../model/Postagem.php");
require_once("decisao-editarPostagem.php");

    $postagem = new Postagem();
    
    $codPostagem = $_POST['id']; 
    $descricao = $_POST['descricaoEditar']; 
    $imgPostagem = $_FILE['imgEditar'];
    $titulo = $_POST['tituloEditar']; //Vem do arquivo decisao-editarPostagem
    $data = $_POST['dataEditar']; 
    $codPrestadorServico = $_POST['codEditar']; //FK prestador servico

    

 if(strlen($imgPostagem['name']) > 0 && strlen($imgPostagem['type']) > 0){

    //- - - | IF PARA VER SE O ARQUIVO DEU ERRO |- - -//
    if($imgPostagem['error']){
        die("error");
    }

    $nomeArquivo = $imgPostagem['name'];

    //Colocando o nome da foto aleatória para não dar conflito no BD & pegando a extensão do arquivo//
    $nomeId = uniqid();
    $ext = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));
    $path = $nomeId . "." . $ext;

    move_uploaded_file($imgPostagem['tmp_name'], 'imagens/'.$path);

    $postagem->setImgPostagem($path);

}else{

    $rand = rand(1, 6);
    $path = "imagens-random/not-image($rand).png";
    $postagem->setImgPostagem($path);

}

   
    
    // $linha = $_POST['linha'];

    $postagem->alterar($codPostagem,$descricao,$imgPostagem,$titulo,$data,$codPrestadorServico);

?>