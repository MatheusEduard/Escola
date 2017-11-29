<?php 

	include "cabecalho.php";
	include "diciplinas.php";
	include "professores.php";


?>
	<!-- conteudo principal -->
	<article class="coluna80">
		<section class="listaProf">
		<h1 id="centraListProf">Lista dos Diciplinas</h1>
			<ul>
		<?php


	if (isset($_SESSION['login'])) {
		echo('<a href="formDisciplinas.php">Incluir Nova Disciplina</a>');

	}
	?>
	<section id="separador"></section>
	<?php

$lista = listaDisciplinas();

	foreach ($lista as $disciplina) {
	?>	
		<li><a href="detalhaDisciplinas.php?cod=<?=$disciplina['cod_disciplina']?>">
		<?=$disciplina['disciplina']?></a></li>
	
			<?php
			}
			?>
			</ul>
		</section>
	</article>
	<?php
	include "rodape.php";
	  ?>