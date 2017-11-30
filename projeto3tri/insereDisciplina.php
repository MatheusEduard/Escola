<?php
include("cabecalho.php");
include("alunos.php");

if(isset($_SESSION['login'])){
	

	$cod = $_POST['codigo'];
	$nome = $_POST['nome'];
	verificaCod($cod);
	


	$linha = $codigo.",".$nome;

	print($linha);
	//abre arquivo

	$arquivo = fopen("dados/disciplinas.csv","a+");
	//escreve no arquivo depois de pular uma linha
	fwrite($arquivo, "\n".$linha);
	//fecha o arquivo
	fclose($arquivo);



include("rodape.php");

  ?>
 <meta http-equiv="refresh" content="0;URL=listaDisciplinas.php?ativo=disciplina">  
 <?php 
}else{
	echo('<h1>Acesso negado</h1>');
	echo ('<meta http-equiv="refresh" content="3;url=listaDisciplinas.php?ativo=disciplina">');
}
 ?>
