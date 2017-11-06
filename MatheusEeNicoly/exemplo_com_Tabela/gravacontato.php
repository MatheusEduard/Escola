<?php
include("cabecalho.php");

print_r($_POST);

$codigo = 10;

$nome = $_POST['nome'];
$email = $_POST['email'];
$foto = $_POST['img'];
$telefone = $_POST['telefone'];
$profissao = $_POST['profissao'];

$linha = $codigo .";".$nome.";".$email.";".$foto.";".$telefone.";".$profissao ;

print($linha);



include("rodape.php");

  ?>