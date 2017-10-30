<?php 

	include "cabecalho.php";
	include "diciplinas.php";
	include "professores.php";
	?>
<?php
	$lista1 = listaOfertas("2017","1info1");

?>
	<article class="coluna80">
	<section class="lista">
		<h1 class="letraTurma">1Info1</h1>
			<ul>

			<?php

foreach ($lista1 as $oferta) {
	$disciplina = buscaDisciplina($oferta['cod_disciplina']);
	$professor = buscaProfessor($oferta['cod_professor']);
?>
	
		<li><?=$disciplina['disciplina']?> - <?=$professor['nome'] ?></li>
	</div>
<?php
}
?>
			</ul>
		</section>

<?php
	$lista2 = listaOfertas("2017","1info2");

?>
	
	<section class="lista">
		<h1 class="letraTurma">1Info2</h1>
			<ul>

			<?php

foreach ($lista2 as $oferta) {
	$disciplina = buscaDisciplina($oferta['cod_disciplina']);
	$professor = buscaProfessor($oferta['cod_professor']);
?>
	
		<li><?=$disciplina['disciplina']?> - <?=$professor['nome'] ?></li>
	</div>
<?php
}
?>
			</ul>
		</section>
		<?php
	$lista1 = listaOfertas("2017","1info3");

?>

	<section class="lista">
		<h1 class="letraTurma">1Info3</h1>
			<ul>

			<?php

foreach ($lista1 as $oferta) {
	$disciplina = buscaDisciplina($oferta['cod_disciplina']);
	$professor = buscaProfessor($oferta['cod_professor']);
?>
	
		<li><?=$disciplina['disciplina']?> - <?=$professor['nome'] ?></li>
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



