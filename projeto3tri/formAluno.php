<?php
include 'cabecalho.php';

if(isset($_SESSION['login'])){
?>
<div class="divider"></div>
	<section>
		<form method="POST" action="insereAluno.php" enctype="multipart/form-data">
		<label for="matricula">Matrícula</label>
		<p><input type="text" name="matricula"></p>

		<label for="nome">Nome</label>
		<p><input type="text" name="nome"></p>

		<label for="turma">Turma</label>
		<select name="turma">
			<option value="1info1">1info1</option>
			<option value="1info2">1info2</option>
			<option value="1info3">1info3</option>
		</select>

		<label for="email">E-mail</label>
		<p><input type="text" name="email"></p>

		<label for="img">Caminho para a imagem    Ex: imagens/nome.jpg</label>
		<p><input type="file" name="img"></p>


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