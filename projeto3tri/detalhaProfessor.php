<?php 

	include "cabecalho.php";
	include "professores.php";
	$siape = $_GET['cod'];

	$professor = buscaProfessor($siape);

	?>
	<article class="coluna80">
		<section class="foto">
			<img src="<?=$professor['foto']?>">
		</section>

		<section class="dados">
			<p><?=$professor['nome']?></p>
			<p><?=$professor['email']?></p>
			

		</section>
	</article>


<?php
	include "rodape.php";	



