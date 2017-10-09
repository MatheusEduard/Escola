<?php
 	//FUNÇÃO que abre um arquivo e retorna o seu conteudo como uma string - file_get_contentes()
	$cabeçalho = file_get_contents("cabecalho.php");
	print($cabeçalho);


?>
		<section id="meio">
		<a href="formContato.php">Adicionar Novo Contato</a>
			<p id="wow">Dados trazidos do CSV</p>
			<table border="1" id="tabela">
			<?php
			//FUNÇAO que abre um arquivo e retorna o seu conteúdo como um ARRAY
			// File() cada posicao equivale a uma linha do arquivo
			$Dados = File("tabelinha.csv");
			$contador = sizeof($Dados) - 1;

			foreach ($Dados as $posicao=>$linha) {
				if ($posicao==0) {
					echo ('<tr class="linha">');
					$partes= explode(",", $linha);

					echo ("<th>".$partes[0]."</th>");
					echo ("<th>".$partes[1]."</th>");

				}else{
						if ($posicao %2==0 ) {
							echo ('<tr class="corPar">');
					
							$partes= explode(",", $linha);

							echo('<td ><a href="contatos.php?cod='.$partes[0].'">'.$partes[1].'</a></td>');
							echo('<td >'.$partes[2].'</td>');
					
							echo '</tr>';
						}else{
							echo ('<tr class="corImpar">');
							
							$partes= explode(",", $linha);

							echo('<td ><a href="contatos.php?cod='.$partes[0].'">'.$partes[1].'</a></td>');
							echo('<td >'.$partes[2].'</td>');
							
							echo '</tr>';

					}
				
				}
			}

			echo('<tr><td colspan = "2">'.$contador.' contato(s) listado(s)</td></tr>');
			?>
			</table>
			
		</section>


		</section>

<?php

	$rodape = file_get_contents("rodape.php");
	print($rodape);
?>	 