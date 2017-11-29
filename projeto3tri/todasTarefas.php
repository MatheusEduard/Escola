<?php 

	include "cabecalho.php";
	include "diciplinas.php";
	include "professores.php";
	include "tarefas.php";
	?>
<?php

?>
	<article class="coluna80">
		<section class="lista">
			<h1>1Info1 - Tarefas</h1>
			<ul>
				<?php
				$lista1 = listaTarefasTurma("1info1");
				$disciplina = buscaDisciplina($oferta['cod_disciplina']);
				?>
				<?php
				foreach ($lista1 as $tarefa) {
				?>
					<li><b><?=$tarefa['data']?> - <?=$disciplina['disciplina']?> - <?=$tarefa['titulo']?></li></b>
					<p><?=$tarefa['descricao']?></p>
				<?php
				}
				?>
				
			</ul>
		</section>

		<section class="lista">
			<h1>1Info2 - Tarefas</h1>
			<ul>
				<?php
				$lista1 = listaTarefasTurma("1info2");
				$disciplina = buscaDisciplina($oferta['cod_disciplina']);
				?>
				<?php
				foreach ($lista1 as $tarefa) {
				?>
					<li><b><?=$tarefa['data']?> - <?=$disciplina['disciplina']?> - <?=$tarefa['titulo']?></li></b>
					<p><?=$tarefa['descricao']?></p>
				<?php
				}
				?>
				
			</ul>
		</section>

		<section class="lista">
			<h1>1Info3 - Tarefas</h1>
			<ul>
				<?php
				$lista1 = listaTarefasTurma("1info3");
				$disciplina = buscaDisciplina($oferta['cod_disciplina']);
				?>
				<?php
				foreach ($lista1 as $tarefa) {
				?>
					<li><b><?=$tarefa['data']?> - <?=$disciplina['disciplina']?> - <?=$tarefa['titulo']?></li></b>
					<p><?=$tarefa['descricao']?></p>
				<?php
				}
				?>
				
			</ul>
		</section>

	</article>

			<?php
	include "rodape.php";
	  ?>