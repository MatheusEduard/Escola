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
			<h1 id="titulo-turma1" class="letraTurma">1Info1 - Tarefas</h1>
			<ul>
				<section id="turma1" class="escondido">

					<?php

						foreach ($lista1 as $oferta) {
							$disciplina = buscaDisciplina($oferta['cod_disciplina']);
							$professor = buscaProfessor($oferta['cod_professor']);
							

					?>
				
					<li><h2 class="accordion"><?=$disciplina['disciplina']?></h2>
						<div class="accordion">
							<p><a href="detalhaProfessor.php?cod=<?=$professor['siape']?>"><?=$professor['nome']?></a></p>

						</div>
					</li>
					<?php
						}
					?>
				</section>
			</ul>
		</section>

<?php
	$lista2 = listaOfertas("2017","1info2");

?>
	
		<section class="lista">
		<h1 id="titulo-turma2" class="letraTurma">1Info2 - Tarefas</h1>
			<ul>
				<section id="turma2" class="escondido">

					<?php

						foreach ($lista2 as $oferta) {
							$disciplina = buscaDisciplina($oferta['cod_disciplina']);
							$professor = buscaProfessor($oferta['cod_professor']);
					?>
				
					<li><h2 class="accordion"><?=$disciplina['disciplina']?></h2>
						<div class="accordion">
							<p><a href="detalhaProfessor.php?cod=<?=$professor['siape']?>"><?=$professor['nome']?></a></p>

						</div>
					</li>
					<?php
						}
					?>
				</section>
			</ul>
		</section>
		<?php
			$lista3 = listaOfertas("2017","1info3");
		?>

	<section class="lista">
		<h1 id="titulo-turma3" class="letraTurma">1Info3 - Tarefas</h1>
			<ul>
				<section id="turma3" class="escondido">

					<?php

						foreach ($lista1 as $oferta) {
							$disciplina = buscaDisciplina($oferta['cod_disciplina']);
							$professor = buscaProfessor($oferta['cod_professor']);
					?>
		
					<li><h2 class="accordion"><?=$disciplina['disciplina']?></h2>
						<div class="accordion">
							<p><a href="detalhaProfessor.php?cod=<?=$professor['siape']?>"><?=$professor['nome']?></a></p>

						</div>
					</li>
					<?php
						}
					?>
				</section>
			</ul>
		</section>
		</article>

			<?php
	include "rodape.php";
	  ?>



