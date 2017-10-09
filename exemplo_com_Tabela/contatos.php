 <?php  
 	$cabeçalho = file_get_contents("cabecalho.php");
	print($cabeçalho);


	$cod = $_GET['cod'];

	$dados = file("tabelinha.csv");

	foreach ($dados as $key => $value) {
		$colunas = explode(",", $value);
		
			if ($colunas[0] == $cod){
				echo('<img class="foto" src="'.$colunas[3].'">');
				echo('<p id="nome">'.$colunas[1].'</p>');
				echo ('<p id="email">'.$colunas[2].'</p>');
				echo('<p id = "num">'.$colunas[4].'</p>');
				echo('<p id = "data">'.$colunas[5].'</p>');
				echo('<p id = "profi">'.$colunas[6].'</p>');




				
			}
			
	}





	$rodape = file_get_contents("rodape.php");
	print($rodape);
  


  ?>