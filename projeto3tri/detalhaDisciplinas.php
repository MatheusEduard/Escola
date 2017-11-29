<?php 

	include "cabecalho.php";
	include "professores.php";
	include "diciplinas.php";
	$cod = $_GET['cod'];

	$disciplina = buscaDisciplina($cod);

	?>
		<article class="coluna80detalha">
		

			<section class="dados">
				<h1><?=$disciplina['disciplina']?></h1>
				
			</section>
	</article>


<?php
	include "rodape.php";