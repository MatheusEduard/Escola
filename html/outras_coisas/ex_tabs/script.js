$(document).ready(function(){
	$(".tab").click(function(){
		var id;
		//pegar id de quem clicou
		id = $(this).attr('id');
		//esconder todos os conteudos
		$('.conteudo').addClass('escondido');
		//aparecer o conteudo relativo a tab clicada
		$("."+id).removeClass('escondido');
		//tirar o status de ativo das tabs
		$(".tab").removeClass('ativo');
		//manter somente a tab clicada como ativo
		$("#"+id).addClass('ativo');
	})
})