<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/completo.css">
	<title>Taverna do Dragão</title>
	<meta charset="utf-8">
</head>
<body>
	<!-- cabeçalho -->
	<header>
		<img src="imagens/logo.png" id="logo"/>
		<h1 id="nome_site">Taverna do Dragão</h1>


		<form method="post" action="login.php">
			<section id="formulario">
				<section class="login">
					<label id="login" for="login">Login</label>
					<input type="text" name="login" id="tamanhobarra1" autocomplete="off">
				</section>

				<section class="senha">	
					<label id="senha" for="senha">Senha</label>
					<input type="password" name="senha" id="tamanhobarra2">
				</section>
				
				<input id="enviar" type="submit" value="Enviar Dados">
			</section>
			</form>

	</header>
	<div class='divider'></div>
	<!-- menu -->
	
	<nav class="menu">
		<a href=""><section class="item menu">Home</section></a>
		<a href=""><section class="item menu">Jogos</section></a>
		<a href=""><section class="item menu">Conquistas</section></a>
		<a href=""><section class="item menu">Reviews</section></a>
		<a href=""><section class="item menu ativo">Ajuda</section></a>
		<section class="itemPesq menu"><input type="text" id="barraPesq"> <input type="button" value="Procurar" id="botao"></section>

	</nav>
	<div class='divider'></div>

	<!-- colunas para centralizar -->
	<div class="coluna10">.</div>