<?php
include 'cabecalho.php';

if(isset($_SESSION['login'])){
?>

	<div class="divider"></div>
		<section>
			<form method="POST" action="insereProfessor.php" enctype="multipart/form-data">
			<label for="siape">Siape</label>
			<p><input type="text" name="siape"></p>

			<label for="nome">Nome</label>
			<p><input type="text" name="nome"></p>

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
	echo ('<meta http-equiv="refresh" content="3;url=listaProfessores.php?ativo=professores">');
}
include 'rodape.php';
?>