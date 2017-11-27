<?php 

	include "cabecalho.php";

?>
	<!-- conteudo principal -->
	<article class="coluna80">
		<section class="listaProf">
		<h1 id="centraListProf">Lista dos Professores</h1>
			<ul>
		<?php



	include "professores.php";

	if (isset($_SESSION['login'])) {
		echo('<a href="formProfessor.php">Incluir Novo Professor</a>');

	}
	?>
	<section id="separador"></section>
	<?php

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