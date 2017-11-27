<?php
include 'cabecalho.php';
?>
<html>
<head>
	<title>ADICIONAR ALUNO</title>
</head>
<body>
<div class="divider"></div>
	<section>
		<form method="POST" action="insereAluno.php" enctype="multipart/form-data">
		<label for="matricula">Matrícula</label>
		<p><input type="text" name="matricula"></p>

		<label for="nome">Nome</label>
		<p><input type="text" name="nome"></p>

		<label for="email">E-mail</label>
		<p><input type="text" name="email"></p>

		<label for="img">Caminho para a imagem    Ex: imagens/nome.jpg</label>
		<p><input type="file" name="img"></p>


		<p><input type="submit" name="enviar" value="Enviar Dados"></p>		
	</form>
	</section>
</body>
</html>

<?php
include 'rodape.php';
?>