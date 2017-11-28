<?php
include("cabecalho.php");

if(isset($_SESSION['login'])){

	print_r($_FILES);

	$origem =$_FILES['img']['tmp_name'];

	$data = date('dmY');

	$destino = "imagens/alunos/".$data.$_FILES['img']['name'];

	move_uploaded_file($origem, $destino);

	$siape = $_POST['siape'];
	$nome = $_POST['nome'];
	$turma=$_POST['turma'];
	$email = $_POST['email'];
	$foto = $destino;


	$linha = $siape .",".$nome.",".$turma.",".$email.",".$foto;

	print($linha);
	//abre arquivo


	$arquivo = fopen("dados/alunos.csv","a+");
	//escreve no arquivo depois de pular uma linha
	fwrite($arquivo, "\n".$linha);
	//fecha o arquivo
	fclose($arquivo);



include("rodape.php");

  ?>
 <meta http-equiv="refresh" content="0;URL=listaAlunos.php">  
 <?php 
}else{
	echo('<h1>Acesso negado</h1>');
	echo ('<meta http-equiv="refresh" content="3;url=listaAlunos.php?ativo=colegas">');
}
 ?>
