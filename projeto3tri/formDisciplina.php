<?php
include 'cabecalho.php';

if(isset($_SESSION['login'])){
?>
<div class="divider"></div>
	<section>
		<form method="POST" action="insereDisciplina.php" enctype="multipart/form-data">
		<label for="codigo">Código da Disciplina</label>
		<p><input type="text" name="codigo"></p>

		<label for="nome">Nome da Disciplina</label>
		<p><input type="text" name="nome"></p>

		


		<p><input type="submit" name="enviar" value="Enviar Dados"></p>		
	</form>
	</section>

<?php
}else{
	echo('<h1>Acesso negado</h1>');
	echo ('<meta http-equiv="refresh" content="3;url=listaAlunos.php?ativo=colegas">');
}
include 'rodape.php';
?>