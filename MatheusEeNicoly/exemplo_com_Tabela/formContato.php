<?php 
include("cabecalho.html");
?>

	<h2>Inserir Contato</h2>

	<form method="POST" action="gravacontato.php">
		<label for="nome">Nome</label>
		<p><input type="text" name="nome"></p>

		<label for="email">Email</label>
		<p><input type="text" name="email"></p>

		<label for="img">Nome do arquivo jpg    Ex: imagens/nome.jpg</label>
		<p><input type="text" name="img"></p>

		<label for="telefone">Telefone    Ex: (47)40028922</label>
		<p><input type="text" name="telefone"></p>


		<label for="profissao">Profissão</label>
		<p><input type="text" name="profissao"></p>

		<p><input type="submit" name="enviar" value="Enviar Dados"></p>		
	</form>
<?php
include("rodape.html");
?>


