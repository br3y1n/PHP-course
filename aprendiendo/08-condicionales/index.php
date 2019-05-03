<?php 
	
	//condicionales
	// comparadores
	// igual ==
	// identico ===
	// diferente !=
	// diferente <>
	// no identico !==
	// menor igual <=
	// mayor igual >=

	//operadores logicos
	// && y and
	// || o or
	// ! not no

	$color = 'rojo';

	if ($color=='rojo') {
		echo "es rojo";
	}else {
		echo "no es rojo";
	}



	$valor = 4;

	switch ($valor) {
		case 1:
			echo 'es uno';
			break;
		case 2:
			echo 'es dos';
			break;
		case 3:
			echo 'es tres';
			break;
		
		default:
			echo 'no lo reconoce';
			break;
	}


	goto marca;

	echo 'echo';

	marca:
	echo 'me he saltado 1 echo';

 ?>