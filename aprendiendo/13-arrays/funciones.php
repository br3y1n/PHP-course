<?php 

	$cantantes = ['creed', 'foofigthers','slikpnot', 'alffred'];

	//ordena en orden alfabetico
	//arsort alfabetico inverso
	//sort alfabetico y en numeros menor a mayor

	asort($cantantes);


	// añadir elementos a un array

	$cantantes[] = 'hola';
	array_push($cantantes, 'hola2');

	//borra el ultimo item del array
	array_pop($cantantes);

	//borra el array deseado - borra posicion 2
	unset($cantantes[2]);

	//dar vuleta a un array
	$other = array_reverse($cantantes);


	//buscar valores en un array

	array_search('slikpnot' , $cantantes);

	
 ?>