<?php
include("cabecalho.php");

if(isset($_SESSION['login'])){

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
 <meta http-equiv="refresh" content="0;URL=listaProfessores.php">  
 <?php 
}else{
	echo('<h1>Acesso negado</h1>');
	echo ('<meta http-equiv="refresh" content="3;url=listaProfessores.php?ativo=professores">');
}
 ?>
