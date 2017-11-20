<?php 
	session_start();
?>

<html>
<head>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/completo.css">
	<title>Todos professores</title>
	<meta charset="utf-8">
</head>
<body id="cor">
	<!-- cabeçalho -->
	<header>
		<img src="imagens/logo.png" id="logo"/>
		<h1 id="nome_site">Agenda de tarefas - IFC Araquari</h1>
		<div id="perfil">
<?php
	//isset() - verifica se uma variavel esta definida
	if (isset($_SESSION['login'])) {// SE ESTIVER LOGADO
		
	
?>
		<!-- MENSAGEM QUANDO LOGADO -->
			<p>Usuário: <?=$_SESSION['nome']?></p>
			<a href="logout.php">Sair</a>

			<!-- Form de Login -->

<?php
	}else{//CASO NAO ESTEJA LOGADO

?>			
			<form id="formulario" method="post" action="login.php">
				<label id="login" for="login">Login</label>
				<input type="text" name="login" id="tamanhobarra1" autocomplete="off">
				<div class="divider"></div>

				<label id="senha" for="senha">Senha</label>
				<input type="password" name="senha" id="tamanhobarra2">
				
				

				<input id="enviar" type="submit" value="Enviar Dados">
			</form>
			<!-- Form de Login-->
<?php

}

if($_GET['ativo'] == "proximasTarefas"){
		$ativo1 = "ativo";
	}elseif ($_GET['ativo'] == "todasTarefas") {
		$ativo2 = "ativo";
	}elseif ($_GET['ativo'] == "tarefasDici") {
		$ativo3 = "ativo";
	}elseif($_GET['ativo'] == "tarefasData"){
		$ativo4 = "ativo";
	}elseif ($_GET['ativo'] == "professores") {
		$ativo5 = "ativo";
	}elseif ($_GET['ativo'] == "colegas") {
		$ativo6 = "ativo";
}

?>			
		</div>
	</header>
	<div class='divider'></div>
	<!-- menu -->
	
	<nav class="menu">
		<a href="proximasTarefas.php?ativo=proximasTarefas"><section id="item" class="item menu <?=$ativo1?>">Próximas tarefas</section></a>

		<a href="todasTarefas.php?ativo=todasTarefas"><section id="item" class="item menu <?=$ativo2?>">Todas Tarefas</section></a>

		<a href="listaOfertas.php?ativo=tarefasDici"><section id="item" class="item menu <?=$ativo3?>">Tarefas por disciplina</section></a>

		<a href="tarefasPorData.php?ativo=tarefasData"><section id="item" class="item menu <?=$ativo4?>">Tarefas por data</section></a>

		<a href="listaProfessores.php?ativo=professores""><section id="item" class="item menu <?=$ativo5?>">Professores</section></a>

		<a href="listaAlunos.php?ativo=colegas"><section id="item" class="item menu <?=$ativo6?>">Colegas</section></a>

	</nav>
	<div class='divider'></div>

	<!-- colunas para centralizar -->
	<div class="coluna10">.</div>
