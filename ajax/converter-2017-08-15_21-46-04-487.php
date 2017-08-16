<?php

//---------------- OCTAL -------------//

$numero = 1000;

while($numero >= 8){
	
	$aux = $numero % 8;
			
	$numero = $numero / 8;
	
	$octal .= $aux;
	
}

$octal  .= floor($numero);

echo $octal;

?>
