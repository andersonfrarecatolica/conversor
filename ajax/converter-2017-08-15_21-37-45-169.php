<?php

$numero = 1000;


while($numero >= 8){
	
	$aux = $numero % 8;
	
	
	if($numero >= 8){
		
		$numero = $numero / 8;
		
		$octal .= $aux;
				
	}else{
		
		$octal .= $numero;	
	
	}
	
}

echo $octal;

?>
