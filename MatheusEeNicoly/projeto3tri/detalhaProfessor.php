<?php 

	include "cabecalho.php";
	include "professores.php";
	include "diciplinas.php";
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
			<p>Disciplinas:
			<ul>
			<?php  
			$disciplinas = disciplinasPorProfessor($siape);

			foreach ($disciplinas as $disciplina) {
				$dados_disc = buscaDisciplina($disciplina['cod_disciplina']);
				print('<li>'.$disciplina['turma'].' - '.$dados_disc['disciplina'].'</li>');
			}




			?>
			</ul>
			</p>

		</section>
	</article>


<?php
	include "rodape.php";	



