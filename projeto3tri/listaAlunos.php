<?php 

	include "cabecalho.php";
	include "alunos.php";
	?>

		<!-- conteudo principal -->
	<article class="coluna80">
		<section class="lista">
		<h1 class="letraTurma">1Info1</h1>
			<ul>

			<?php


$lista1 = listaAlunosTurma("1info1");




foreach ($lista1 as $aluno) {
?>
	
		<li><a href="detalhaAluno.php?cod=<?=$aluno['matricula']?>">
		<?=$aluno['nome']?></a></li>
	</div>
<?php
}
?>
			</ul>
		</section>

			<section class="lista">
		<h1 class="letraTurma">1Info2</h1>
			<ul>

			<?php

$lista2 = listaAlunosTurma("1info2");




foreach ($lista2 as $aluno) {
?>
	
		<li><a href="detalhaAluno.php?cod=<?=$aluno['matricula']?>">
		<?=$aluno['nome']?></a></li>
	</div>
<?php
}
?>
			</ul>
		</section>

			<section class="lista">
		<h1 class="letraTurma">1Info3</h1>
			<ul>

			<?php

$lista3 = listaAlunosTurma("1info3");




foreach ($lista3 as $aluno) {
?>
	
		<li><a href="detalhaAluno.php?cod=<?=$aluno['matricula']?>">
		<?=$aluno['nome']?></a></li>
	</div>
<?php
}
?>
			</ul>
		</section>
	</article>

	<?php
	include "rodape.php";
	  ?>


