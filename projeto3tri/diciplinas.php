<?php


//////////////////////////////////////////////////////////////////////////////////////
//  FUNÇÃO QUE LISTA DICIPLINAS                                                     //
//////////////////////////////////////////////////////////////////////////////////////


	function listaDisciplinas(){
	$disciplina = array();
	$dados = file("dados/disciplinas.csv");

	foreach ($dados as $posicao => $linha) {
		if ($posicao != 0) {
			
			$colunas = explode(",", $linha);

			$disciplina = array();

			$disciplina['cod_disciplina'] = $colunas[0];
		 	$disciplina['disciplina'] = $colunas[1];

		 	$disciplinas[] = $disciplina; 

			}
		}
		return $disciplinas;
	}

//$lista = listaDiciplinas();
	//print_r($lista);

function buscaDisciplina($codigo){
		$disciplina = array();  
		$dados = file("dados/disciplinas.csv");

		foreach ($dados as $linha) {
			$colunas = explode(",", $linha);
			if ($colunas[0] == $codigo) {
				$disciplina['disciplina'] = $colunas[1];
				
			}
		}
		return $disciplina;
	}

	//$busca = buscaDisciplina("");
	//print_r($busca);


	function listaOfertas($ano,$turma){

		$oferta = array();
		$dados = file("dados/ofertas.csv");

		 foreach ($dados as $posicao => $linha) {
		 	if($posicao != 0){

		 		$colunas = explode(",", $linha);

		 		if ($ano ==$colunas[0] && $turma == $colunas[1]) {
			 			
			 		

			 		$oferta = array();

			 		$oferta['ano'] = $colunas[0];
			 		$oferta['turma'] = $colunas[1];
			 		$oferta['cod_disciplina'] = $colunas[2];
			 		$oferta['cod_professor'] = $colunas[3];

			 		$ofertas[] = $oferta;
		 		}
		 	}
		 }

		 return $ofertas;
}

//$lista = listaOfertas("2017","1info1");

//print_r($lista);


function disciplinasPorProfessor($siape){

		$oferta = array();
		$dados = file("dados/ofertas.csv");

		 foreach ($dados as $posicao => $linha) {
		 	if($posicao != 0){

		 		$colunas = explode(",", $linha);

		 		if ($siape ==$colunas[3]) {
			 			
			 		

			 		$oferta = array();

			 		$oferta['ano'] = $colunas[0];
			 		$oferta['turma'] = $colunas[1];
			 		$oferta['cod_disciplina'] = $colunas[2];
			 		$oferta['cod_professor'] = $colunas[3];

			 		$ofertas[] = $oferta;
		 		}
		 	}
		 }

		 return $ofertas;
}

//print_r(disciplinasPorProfessor(1578494));,


function professorDisciplina(){}