<?php 

	include "cabecalho.php";
	include "alunos.php";
	$matricula = $_GET['cod'];

	$aluno = buscaAluno($matricula);

	?>
	<article class="coluna80">
		<section class="pequenas">
			<img src="<?=$aluno['foto']?>" class="clicavel" id="img">
		</section>
		<section class="modal img escondido">
			<section class="fechar">X</section>
			<img src="<?=$aluno['foto']?>" class="grande">
		</section>

		<section class="dados">
				<p><?=$aluno['nome']?></p>
				<p><?=$aluno['email']?></p>
			

		</section>
	</article>


<?php
	include "rodape.php";

