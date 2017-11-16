<?php
include 'cabecalho.php';
?>
<html>
<head>
	<title>ADICIONAR PROFESSOR</title>
</head>
<body>
<div class="divider"></div>
	<section>
		<form method="POST" action="insereProfessor.php">
		<label for="siape">Siape</label>
		<p><input type="text" name="siape"></p>

		<label for="nome">Nome</label>
		<p><input type="text" name="nome"></p>

		<label for="email">E-mail</label>
		<p><input type="text" name="email"></p>

		<label for="img">Caminho para a imagem    Ex: imagens/nome.jpg</label>
		<p><input type="text" name="img"></p>


		<p><input type="submit" name="enviar" value="Enviar Dados"></p>		
	</form>
	</section>
</body>
</html>

<?php
include 'rodape.php';
?>