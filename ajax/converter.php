<?php

//---------------- OCTAL -------------//
//Octal divide por 8 ate o numero for maior ou igual a 8. Enquanto o numero é maior que 8, soma a string o resto. Quando é menor que 8, pega o cuociente.

$numero = 1000;

while($numero >= 8){
	
	$aux = $numero % 8;
			
	$numero = $numero / 8;
	
	$octal_inverso .= $aux;
	
}

$octal_inverso  .= floor($numero);

$total = strlen($octal_inverso);

for($i = 3; $i >= 0; $i--){
	
	$octal .= $octal_inverso[$i];
		
}

echo $octal;

//---------------- /OCTAL -------------//


?>
