<?php 

	include "cabecalho.php";
	include "alunos.php";
	?>

		<!-- conteudo principal -->
	<article class="coluna80">
		<section class="lista">
			<h1 id="titulo-turma1" class="letraTurma">1Info1</h1>
			<ul>

				<?php


					$lista1 = listaAlunosTurma("1info1");

				?>
				<section id="turma1" class="escondido">

					<?php
					if (isset($_SESSION['login'])) {
					echo('<a href="formAluno.php">Incluir Novo Aluno</a>');

				}
				?>
				<section id="separador"></section>

					<?php
					foreach ($lista1 as $aluno) {
					?>
			
						<li><a href="detalhaAluno.php?cod=<?=$aluno['matricula']?>">
				<?=$aluno['nome']?></a></li>
					</div>
					<?php
						}
					?>
				</section>
			</ul>
		</section>

		<section class="lista">
			<h1  id="titulo-turma2" class="letraTurma">1Info2</h1>
			<ul>

				<?php

					$lista2 = listaAlunosTurma("1info2");

				?>
				<section id="turma2" class="escondido">
					<?php
					if (isset($_SESSION['login'])) {
					echo('<a href="formAluno.php">Incluir Novo Aluno</a>');

					}
					?>
					<section id="separador"></section>

					<?php

					foreach ($lista2 as $aluno) {
					?>
						
						<li><a href="detalhaAluno.php?cod=<?=$aluno['matricula']?>">
						<?=$aluno['nome']?></a></li>
							</div>
					<?php
						}
					?>
				</section>
			</ul>
		</section>

		<section class="lista">
			<h1 id="titulo-turma3" class="letraTurma">1Info3</h1>
			<ul>

				<?php

					$lista3 = listaAlunosTurma("1info3");

				?>
					<section  id="turma3" class="escondido">

						<?php
					if (isset($_SESSION['login'])) {
					echo('<a href="formAluno.php">Incluir Novo Aluno</a>');

					}
					?>
					<section id="separador"></section>
						<?php

							foreach ($lista3 as $aluno) {

						?>
		
						<li><a href="detalhaAluno.php?cod=<?=$aluno['matricula']?>">
						<?=$aluno['nome']?></a></li>
					</div>
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