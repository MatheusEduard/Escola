<?php 

	include "cabecalho.php";

?>
	<!-- conteudo principal -->
	<article class="coluna80">
		<section class="lista">
		<h1>Lista dos Professores</h1>
			<ul>
		<?php



	include "professores.php";

$lista = listaProfessores();

foreach ($lista as $professor) {
?>	
		<li><a href="detalhaProfessor.php?cod=<?=$professor['siape']?>">
		<?=$professor['nome']?></a></li>
	
<?php
}
?>
			</ul>
		</section>
	</article>
	<?php
	include "rodape.php";
	  ?>