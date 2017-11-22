<?php
include("cabecalho.php");

print_r($_FILES);

$origem =$_FILES['img']['tmp_name'];

$data = date('dmY');

$destino = "imagens/professores/".$data.$_FILES['img']['name'];

move_uploaded_file($origem, $destino);

$siape = $_POST['siape'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$foto = $destino;


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
<!-- <meta http-equiv="refresh" content="50;URL=listaProfessores.php">  -->