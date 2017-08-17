﻿<?php

//---------------- OCTAL -------------//
//Octal divide por 8 ate o numero for maior ou igual a 8. Enquanto o numero é maior que 8, soma a string o resto. Quando é menor que 8, pega o quociente.

//$numero = 1000;


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

//echo $octal;

//---------------- /OCTAL -------------//

//---------------- HEXADECIMAL -------------//
//Hexadecimal divide por 16 até o numero ser menor que 16. Se o numero for de 10 a 15, substitui por letra. Ex.. 10 = A, 11 = B, 12 = C... E se for menor é o proprio numero

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

$numero = 65535;

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

//echo $hexadeimal;

//---------------- //HEXADECIMAL -------------//

//---------------- BINARIO -------------//
//Enquanto o quociente for diferente de 0, divide por 2 e concatena o resto na variavel para formar o numero binario

$numero = 10;

while($numero != 0){

	$aux = $numero % 2;
   
    $numero = floor($numero / 2);
   
    $binario = $aux.$binario;
	
}

//echo $binario;

//---------------- /BINARIO -------------//

//---------------- BINARIO PARA DECIMAL -------------//

$binario = '1100001001';

$total = strlen($binario) - 1;

for($i = $total; $i >= 0; $i--){
	
	$decimal .= $binario[$i];
		
}

for($i = 0; $i <= $total; $i++){
	
	$decimal_final += pow(2, $i) * $decimal[$i];
	
}

//echo $decimal_final;

//---------------- BINARIO PARA DECIMAL -------------//

//---------------- OCTAL PARA DECIMAL -------------//

unset($decimal);

$binario = '1411';

$total = strlen($binario) - 1;

for($i = $total; $i >= 0; $i--){
	
	$decimal .= $binario[$i];
		
}

echo $decimal;

for($i = 0; $i <= $total; $i++){
	
	$decimal_final += pow(8, $i) * $decimal[$i];
	
	//echo $decimal[$i];
	
}

//echo $decimal_final;

//---------------- OCTAL PARA DECIMAL -------------//


?>