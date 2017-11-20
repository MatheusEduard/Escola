<?php
include("cabecalho.php");

$origem = $_FILES['foto']['tmp_name'];
$destino = "imagens/professores/".$_FILES['foto']['name'];
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
 <meta http-equiv="refresh" content="0;URL=listaProfessores.php">  