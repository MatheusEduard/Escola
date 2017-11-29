	<?php

	function listaTarefas(){
		$tarefa = array();  
		$dados = file("dados/tarefas.csv");
		foreach ($dados as $posicao => $linha) {
		if ($posicao!= 0) {
			
		

			$colunas = explode(",", $linha);


				$tarefa = array();
				$tarefa['turma'] = $colunas[0];
				$tarefa['data'] = $colunas[1];
				$tarefa['disciplina'] = $colunas[2];
				$tarefa['titulo'] = $colunas[3];
				$tarefa['descricao'] = $colunas[4];

			$tarefas[] = $tarefa;

		}
	}


		return $tarefas;
	}



	function listaTarefasTurma($turma){


		$tarefa = array();
		$dados = file("dados/tarefas.csv");

		 foreach ($dados as $posicao => $linha) {
		 	if($posicao != 0){

		 		$colunas = explode(",", $linha);
			 	if($colunas[0] == $turma){

			 		$tarefa = array();

				$tarefa['turma'] = $colunas[0];
				$tarefa['data'] = $colunas[1];
				$tarefa['disciplina'] = $colunas[2];
				$tarefa['titulo'] = $colunas[3];
				$tarefa['descricao'] = $colunas[4];

				$tarefas[] = $tarefa;

			 	}
			}

		}
		 return $tarefas;
}


function listaTarefasTurmaDisciplina($turma,$cod_disciplina){


		$tarefa = array();
		$dados = file("dados/tarefas.csv");

		 foreach ($dados as $posicao => $linha) {
		 	if($posicao != 0){

		 		$colunas = explode(",", $linha);
		 	if ($colunas[2] == $cod_disciplina) {
		 		
		 	
			 	if($colunas[0] == $turma){

			 		$tarefa = array();

				$tarefa['turma'] = $colunas[0];
				$tarefa['data'] = $colunas[1];
				$tarefa['disciplina'] = $colunas[2];
				$tarefa['titulo'] = $colunas[3];
				$tarefa['descricao'] = $colunas[4];

				$tarefas[] = $tarefa;

			 	}
			 }
		}
	}
		 return $tarefas;
}




