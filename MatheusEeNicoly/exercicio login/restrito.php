<?php
	//se usuario estiver logado como ADM
	session_start();
	if($_SESSION['login'] == 'admin'){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Restrito - ADM</title>
</head>
<body>
<h2>Paágina de Acesso Restrito - ADM</h2>
<a href="logout.php">Logout</a>
<p>Nesta página você pode alterar as configurações do sistema</p>

</body>
</html>
<?php
	}else{
		echo "Acesso Negado";
		echo ('<meta http-equiv="refresh" content="2;url=publico.php">');
	}
  ?>