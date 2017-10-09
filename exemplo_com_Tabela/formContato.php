<?php 
include("cabecalho.html");
?>

	<h2>Inserir Contato</h2>

	<form method="POST" action="gravacontato.php">
		<label for="Name">Nome</label>
		<p><input type="text" name="Name"></p>

		<label for="Email">Email</label>
		<p><input type="text" name="Email"></p>

		<label for="img">Nome do arquivo jpg</label>
		<p><input type="text" name="img"></p>

		<label for="Telefone">Telefone</label>
		<p><input type="text" name="Telefone"></p>


		<label for="profissao">Profissão</label>
		<p><input type="text" name="profissao"></p>

		<p><input type="submit" name="Eviar" value="Eviar"></p>		
	</form>
<?php
include("rodape.html");
?>


