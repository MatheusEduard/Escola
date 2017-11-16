<?php
include("cabecalho.php");

print_r($_POST);

$siape = $_POST['siape'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$foto = $_POST['img'];


$linha = $siape .",".$nome.",".$email.",".$foto;

print($linha);
//abre arquivo


$arquivo = fopen("dados/professores.csv","a+");
//escreve no arquivo depois de pular uma linha
fwrite($arquivo, "\n".$linha);
//fecha o arquivo
fclose($arquivo);



include("rodape.php");

  ?>
 <meta http-equiv="refresh" content="0;URL=listaProfessores.php">  