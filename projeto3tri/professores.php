<?php 

//arquivo com funcoes para manipulaçao dos dados de professores


/////////////////////////////////////////////////////////////////
// FUNÇÃO QUE LISTA OS PROFESSORES                                                          
/////////////////////////////////////////////////////////////////

	function listaProfessores(){
		$professor = array();  
		$dados = file("dados/professores.csv");
		foreach ($dados as $posicao => $linha) {
		if ($posicao!= 0) {
			
		

			$colunas = explode(",", $linha);


				$professor = array();
				$professor['siape'] = $colunas[0];
				$professor['nome'] = $colunas[1];
				$professor['email'] = $colunas[2];
				$professor['foto'] = $colunas[3];

			$professores[] = $professor;

		}
	}


		return $professores;
	}


/////////////////////////////////////////////////////////////////
//   FUNÇÃO QUE BUSCA DADOS DE UM PROFESSOR                    //                                      
/////////////////////////////////////////////////////////////////

	function buscaProfessor($codigo){
		$professor = array();  
		$dados = file("dados/professores.csv");

		foreach ($dados as $linha) {
			$colunas = explode(",", $linha);
			if ($colunas[0] == $codigo) {
				$professor['nome'] = $colunas[1];
				$professor['siape'] = $colunas[0];
				$professor['email'] = $colunas[2];
				$professor['foto'] = $colunas[3];
			}
		}
		return $professor;
	}


