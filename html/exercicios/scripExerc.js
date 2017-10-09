function operacoes(){
	//alert("alahuakbar");

	var primeiro, segundo, resultadosoma, resultadosub, resultadomult, resultadodiv;


 	primeiro =parseInt( document.getElementById("primeiro").value); 
	segundo = parseInt(document.getElementById("segundo").value);

	//alert(primeiro);
	//alert(segundo);

	resultadosoma = parseInt(primeiro) + parseInt(segundo);
	resultadosub = parseInt(primeiro) - parseInt(segundo);
	resultadomult = parseInt(primeiro) * parseInt(segundo);
	resultadodiv = parseInt(primeiro) / parseInt(segundo);

	//alert(resultadosoma);
	//alert(resultadosub);
	//alert(resultadomult);
	//alert(resultadodiv);

	document.getElementById("resultado").innerHTML ="Soma: " + primeiro + "+" + segundo + " = " + resultadosoma + "</br> Subtracao: " + primeiro + "-" + segundo + " = " + resultadosub + "</br> Multiplicao: " + primeiro + "+" + segundo + " = " + resultadomult + "</br> Divisao: "  + primeiro + "+" + segundo+ " = " + resultadodiv;

	//alert("wow");

}