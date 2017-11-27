 $(document).ready(function(){
	$("#titulo-turma1").click(function(){
		$("#turma1").toggleClass("escondido").slideToggle("slow");
	})
	$("#titulo-turma2").click(function(){
		$("#turma2").toggleClass("escondido").slideToggle("slow");
	})
	$("#titulo-turma3").click(function(){
		$("#turma3").toggleClass("escondido").slideToggle("slow");
	})
	$(".clicavel").click(function(){
		var id;
		id = $(this).attr('id');
		$("."+id).removeClass('escondido').slideToggle("slow");
	})
	$(".fechar").click(function(){
		$(".modal").addClass('escondido');
	})
	$("#item").click(function(){
		var id;
		id = $(this).attr('id');
		$("."+id).addClass('item.ativo');
	})
	$('h2.accordion').click(function(){
		$(this).parent().find('div.accordion').slideToggle("slow");
	})

})