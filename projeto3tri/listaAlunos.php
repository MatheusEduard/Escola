<?php 

	include "cabecalho.php";
	?>

		<!-- conteudo principal -->
	<article class="coluna80">
		<section class="lista">
			<ul>

			<?php
	include "alunos.php";

$lista = listaAlunos();



foreach ($lista as $aluno) {
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
//print_r($aluno);
	include "rodape.php";
	  ?>