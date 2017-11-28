<?php 

///////////////////////////////////////////////////////////////////////////
// FUNÇÃO QUE LISTA TODOS OS ALUNOS                                      //
///////////////////////////////////////////////////////////////////////////

	function listaAlunos(){

		$alunos = array();
		$dados = file("dados/alunos.csv");

		 foreach ($dados as $posicao => $linha) {
		 	if($posicao != 0){

		 		$colunas = explode(",", $linha);

		 		$aluno = array();

		 		$aluno['matricula'] = $colunas[0];
		 		$aluno['nome'] = $colunas[1];
		 		$aluno['turma'] = $colunas[2];
		 		$aluno['email'] = $colunas[3];
		 		if(isset($colunas[4])){
		 			$aluno['foto'] = $colunas[4];
		 		}else{
		 			$aluno['foto'] = 'imagens/pessoa.png';
		 		}

		 		$alunos[] = $aluno;

		 	}
		 }

		 return $alunos;
}

//$lista = listaAlunos();

//print_r($lista);

///////////////////////////////////////////////////////////////////////////
// FUNÇÃO QUE BUSCA OS DADOS DE UM ALUNO                                 //
///////////////////////////////////////////////////////////////////////////




function buscaAluno($codigo){
		$aluno = array();  
		$dados = file("dados/alunos.csv");

		foreach ($dados as $linha) {
			$colunas = explode(",", $linha);
			if ($colunas[0] == $codigo) {
				$aluno['nome'] = $colunas[1];
				$aluno['matricula'] = $colunas[0];
				$aluno['turma'] = $colunas[2];
				$aluno['email'] = $colunas[3];
				if(isset($colunas[4])){
		 			$aluno['foto'] = $colunas[4];
		 		}else{
		 			$aluno['foto'] = 'imagens/pessoa.png';
		 		}
			}
		}
		return $aluno;
	}

	//$busca = buscaAluno(2017310479);

	//print_r($busca);


//////////////////////////////////////////////////////////////////
// FUNÇÂO QUE SEPARA ALUNOS POR TURMA                           //
//////////////////////////////////////////////////////////////////



	function listaAlunosTurma($turma){


		$alunos = array();
		$dados = file("dados/alunos.csv");

		 foreach ($dados as $posicao => $linha) {
		 	if($posicao != 0){

		 		$colunas = explode(",", $linha);
			 	if($colunas[2] == $turma){

			 		$aluno = array();

			 		$aluno['matricula'] = $colunas[0];
			 		$aluno['nome'] = $colunas[1];
			 		$aluno['turma'] = $colunas[2];
			 		$aluno['email'] = $colunas[3];
			 		if(isset($colunas[4])){
			 			$aluno['foto'] = $colunas[4];
			 		}else{
			 			$aluno['foto'] = 'imagens/pessoa.png';
			 		}

			 		$alunos[] = $aluno;

			 	}
			}

		}
		 return $alunos;
}






