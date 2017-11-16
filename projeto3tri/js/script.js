 $(document).ready(function(){
	$("#titulo-turma1").click(function(){
		$("#turma1").toggleClass("escondido");
	})
	$("#titulo-turma2").click(function(){
		$("#turma2").toggleClass("escondido");
	})
	$("#titulo-turma3").click(function(){
		$("#turma3").toggleClass("escondido");
	})
	$(".clicavel").click(function(){
		var id;
		id = $(this).attr('id');
		$("."+id).removeClass('escondido')
	})
	$(".fechar").click(function(){
		$(".modal").addClass('escondido');
	})

})