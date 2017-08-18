<?php

function converteNumeroLetra($numero){
	
	if($numero == 10){
		$retorno = 'A';	
	}else if($numero == 11){
		$retorno = 'B';	
	}else if($numero == '12'){
		$retorno = 'C';	
	}else if($numero == 13){
		$retorno = 'D';	
	}else if($numero == 14){
		$retorno = 'E';	
	}else if($numero == 15){
		$retorno = 'F';	
	}else{
		$retorno = $numero;	
	}
	
	return $retorno;
	
}

function converteLetraNumero($letra){
	
	if($letra == 'A'){
		$retorno = 10;	
	}else if($letra == 'B'){
		$retorno = 11;	
	}else if($letra == 'C'){
		$retorno = 12;	
	}else if($letra == 'D'){
		$retorno = 13;	
	}else if($letra == 'E'){
		$retorno = 14;	
	}else if($letra == 'F'){
		$retorno = 15;	
	}else{
		$retorno = $letra;	
	}
	
	return $retorno;
	
}


//---------------- BINARIO PARA DECIMAL -------------//

function binarioParaDecimal($binario){
		
	$total = strlen($binario) - 1;
	
	$j = 0;
	
	for($i = $total; $i >= 0; $i--){
		
		$decimal += pow(2, $j) * $binario[$i];
		
		$j++;
				
	}
	
	return $decimal;

}

//---------------- BINARIO PARA DECIMAL -------------//

//---------------- OCTAL PARA DECIMAL -------------//

function octalParaDecimal($octal){
	
	$total = strlen($octal) - 1;
	
	$j = 0;
	
	for($i = $total; $i >= 0; $i--){
		
		$decimal += pow(8, $j) * $octal[$i];
		
		$j++;
			
	}
	
	return $decimal;

}

//---------------- /OCTAL PARA DECIMAL -------------//

//---------------- HEXADECIMAL PARA DECIMAL -------------//

function hexadecimalParaDecimal($hexadecimal){
	
	$total = strlen($hexadecimal) - 1;
	
	$j = 0;
	
	for($i = $total; $i >= 0; $i--){
			
		$decimal += pow(16, $j) * converteLetraNumero($hexadecimal[$i]);
		
		$j++;
		
	}
	
	return $decimal;

}

//---------------- HEXADECIMAL PARA DECIMAL -------------//

//---------------- BINARIO -------------//
//Enquanto o quociente for diferente de 0, divide por 2 e concatena o resto na variavel para formar o numero binario

function decimaParaBinario($numero){
		
	while($numero != 0){
	
		$aux = $numero % 2;
	   
		$numero = floor($numero / 2);
	   
		$binario = $aux.$binario;
		
	}
	
	return $binario;

}

//---------------- /BINARIO -------------//

//---------------- OCTAL -------------//
//Octal divide por 8 ate o numero for maior ou igual a 8. Enquanto o numero é maior que 8, soma a string o resto. Quando é menor que 8, pega o quociente.

//$numero = 1000;

function decimaParaOctal($numero){

	while($numero >= 8){
		
		$aux = $numero % 8;
				
		$numero = $numero / 8;
		
		$octal_inverso .= $aux;
		
	}
	
	$octal_inverso  .= floor($numero);
	
	$total = strlen($octal_inverso) - 1;
	
	for($i = $total; $i >= 0; $i--){
		
		$octal .= $octal_inverso[$i];
			
	}
	
	return $octal;

}

//---------------- /OCTAL -------------//

//---------------- HEXADECIMAL -------------//
//Hexadecimal divide por 16 até o numero ser menor que 16. Se o numero for de 10 a 15, substitui por letra. Ex.. 10 = A, 11 = B, 12 = C... E se for menor é o proprio numero

function decimalParaHexadecimal($numero){

	
	while($numero >= 16){
			
		$aux = $numero % 16;
		
		$aux = converteNumeroLetra($aux);
		
		$numero = $numero / 16;
		
		$hexadecimal_inverso .= $aux;
		
	}
	
	$hexadecimal_inverso  .= converteNumeroLetra(floor($numero));
	
	$total = strlen($hexadecimal_inverso) - 1;
	
	for($i = $total; $i >= 0; $i--){
		
		$hexadeimal .= $hexadecimal_inverso[$i];
			
	}

	return $hexadeimal;

}



//---------------- //HEXADECIMAL -------------//

//----------------- LOGICA -------------------//

$base = $_POST['base'];
$valor = $_POST['valor'];

if($base == '1'){
	$numero = $valor;
}else if($base == '2'){
	$numero = binarioParaDecimal($valor);	
}else if($base == '3'){
	$numero = octalParaDecimal($valor);		
}else if($base == '4'){
	$numero = hexadecimalParaDecimal($valor);				
}

$dados['decimal'] = $numero;

$dados['binario'] = decimaParaBinario($numero);

$dados['octal']  = decimaParaOctal($numero);

$dados['hexadecimal']  = decimalParaHexadecimal($numero);


echo json_encode($dados);
?>
