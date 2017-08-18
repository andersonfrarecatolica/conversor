<?php
$numero = 42;

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
?>