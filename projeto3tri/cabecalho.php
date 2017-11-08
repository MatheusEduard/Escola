<?php 
	session_start();
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/completo.css">
	<title>Todos professores</title>
	<meta charset="utf-8">
</head>
<body>
	<!-- cabeçalho -->
	<header>
		<img src="imagens/logo.png" id="logo"/>
		<h1 id="nome_site">Agenda de tarefas</h1>
		<div id="perfil">
<?php
	//isset() - verifica se uma veriavel esta definida
	if (isset($_SESSION['login'])) {// SE ESTIVER LOGADO
		
	
?>
		<!-- MENSAGEM QUANDO LOGADO -->
			<p>Usuário: <?=$_SESSION['nome']?></p>
			<a href="logout.php">Sair</a>

			<!-- Form de Login -->

<?php
	}else{//CASO NAO ESTEJA LOGADO

?>			
			<form method="post" action="login.php">
				<label for="login">Login</label>
				<input type="text" name="login" class="tamanhobarra" autocomplete="off">
				<br>

				<label for="senha">Senha</label>
				<input type="password" name="senha" class="tamanhobarra">
				<br>
				<br>

				<input type="submit" value="Enviar Dados">
			</form>
			<!-- Form de Login-->
<?php

}
?>			
		</div>
	</header>
	<div class='divider'></div>
	<!-- menu -->
	
	<nav class="menu">
		<a href=""><section class="item menu">Próximas tarefas</section></a>
		<a href=""><section class="item menu">Todas Tarefas</section></a>
		<a href="listaOfertas.php"><section class="item menu">Tarefas por disciplina</section></a>
		<a href=""><section class="item menu">Tarefas por data</section></a>
		<a href="listaProfessores.php"><section class="item menu ativo">Professores</section></a>
		<a href="listaAlunos.php"><section class="item menu">Colegas</section></a>
	</nav>
	<div class='divider'></div>

	<!-- colunas para centralizar -->
	<div class="coluna10">.</div>
