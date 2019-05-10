<?php 

	// un array es una coleccion de datos bajo un unico nombre, y para acceder se necesario un indice alfa numerico - vector

	$peliculas = array('batman', 'spiderman', 'anillos');

	$cantantes = ['creed', 'foofigthers','slikpnot'];

	echo '<h1> peliculas </h1>';
	//count cuenta el numero de elementos en un array
	echo '<ul>';

	for ($i=0; $i < count($cantantes) ; $i++) { 
		echo '<li>'.$cantantes[$i].'</li>';
	}
	echo '</ul>';

	echo '<hr/>';

	//especial para recorrer arrays
	echo '<ul>';

	foreach ($peliculas as $pelicula) {
		echo '<li>'.$pelicula.'</li>';
	}

	echo '</ul>';

//____________________________________________
	echo '<hr/>';


	//definir indice del array - array asociativo
	$personas = array('nombre'=>'brayan', 'apellido' => 'arango');

	echo $personas['nombre'];
	echo '<hr/>';
	//____________________________________________


	// array multidimencional, o array con array dentro

	$contacto = array(
		array(
			'nombre'=>'brayan',
			'apellido'=>'arango'
		),
		array(
			'nombre'=>'luis',
			'apellido'=>'miguel'
		),
		array(
			'nombre'=>'pito',
			'apellido'=>'apez'
		));

	echo $contacto[1]['nombre'].'<br>';

	foreach ($contacto as $key => $el) {
		echo $el['nombre'].'<br>';
	}

 ?>