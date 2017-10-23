<?php 

	include "cabecalho.php";
	include "alunos.php";
	$matricula = $_GET['cod'];

	$professor = buscaAluno($matricula);

	?>
	<article class="coluna80">
		<section class="foto">
			<img src="<?=$aluno['foto']?>">
		</section>

		<section class="dados">
				<p><?=$aluno['nome']?></p>
				<p><?=$aluno['email']?></p>
			

		</section>
	</article>


<?php
	include "rodape.php";

