function soma(primeiro,segundo){
	resultado = parseFloat(primeiro) + parseFloat(segundo);
	return resultado;
	
}

function verifica(){
	var primeiro, segundo, resultado;
	primeiro = document.getElementById("primeiro").value; 
	segundo = document.getElementById("segundo").value;

	resultado = soma(primeiro,segundo);

	if (resultado %2 == 0) {
		document.getElementById("resultado").innerHTML = "eh par:" + resultado;
	}
	else if(resultado %2 >0 || resultado %2 < 0){
		document.getElementById("resultado").innerHTML = "eh impar:" + resultado;
	}else{
		document.getElementById("resultado").innerHTML = "Erro" + resultado;
	}

	
	 
	 }


