<?php 
	
	//un programa que añada valores a un array mientras que su longitud sea menor a 120, y luego mostrarlo por pantalla
	$presicion = null;

	while(count($presicion) < 120){
		$presicion[] = rand(0,20);
	}
	foreach ($presicion as $valores) {
		echo $valores.'<br>';
	}
	

 ?>