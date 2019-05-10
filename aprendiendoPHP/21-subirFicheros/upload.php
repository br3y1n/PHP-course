<?php 

	$archivo = $_FILES['archivo'];
	//var_dump($archivo);
	//die();
	

	$nombre = $archivo['name'];
	$tipo = $archivo['type'];

	//valida el tipo de imagen
	if ($tipo == 'image/jpg' || $tipo == 'image/jpeg' || $tipo == 'image/png') {
		echo 'es una imagen <br>';
		if (!is_dir('images')) {
			mkdir('images') or die('no siguio');
			echo 'paso por aqui <br>';
		}

		//mueve del archivo temporal al servidor
		move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre) or die ('no pudo');

		echo 'Subio correctamente <br>';

	} else{
		//espera 5seg y lo devuelve a index php
		header("Refresh: 5; URL=index.php");
		echo 'no es un formato de imagen correcto';
	}
 ?>