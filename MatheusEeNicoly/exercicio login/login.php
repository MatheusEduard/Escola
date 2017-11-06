<?php  

//iniciar session
session_start();
//capturando informações que vieram do formulario
$login = $_POST['login'];
$senha = $_POST['senha']; 


	//se usuario informado for 'admin' e senha for 'admin'

if ($login == 'admin' and $senha == 'admin') {
	echo("Olá, Administrador!");

	//gravar informações na $_SESSION
	$_SESSION['nome'] = "Administrador";
	$_SESSION['login'] = "admin";
	//redireciona para a pag de acesso restrito de ADM
	echo('<meta http-equiv="refresh" content="2;url=restrito.php">');


}elseif($login == 'matheus' and $senha == 'uau'){

	echo("Olá, Usuario!");
	//redireciona para a pag de acesso restrito de ADM
	echo('<meta http-equiv="refresh" content="2;url=individual.php">');

}else{
	echo("Dados Inválidos!");
	//redireciona para a pag de login
	echo ('<meta http-equiv="refresh" content="2;url=publico.php">');
}






?>