<?php 
	
	//hacer un programa que tenga un array con 8 numeros enteros y que haga lo siguiente: recogerlo y mostrarlo, ordenarlo y mostrarlo, mostrar su longitud y buscar algun elemento


	
	$numero = [2,5,32,0,7,1,4,9];

	foreach ($numero as $num) {
		echo $num.'<br>';
	}
	echo '<hr>';

	asort($numero);
		foreach ($numero as $num) {
		echo $num.'<br>';
	}
	echo '<hr>';

	echo count($numero).'<br>';
	echo '<hr>';

	echo array_search(2, $numero);

 ?>