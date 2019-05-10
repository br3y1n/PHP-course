<?php 

	//crear una seccion que aumente su valor a 1 en funcion de si el parametro get counter esta a uno o a cero

	session_start();

	if(!isset($_SESSION['numero'])){
		$_SESSION['numero'] = 0 ;
	}

	if($_GET['contar'] == 1){

		$_SESSION['numero']++;
	}
	if( $_GET['contar'] == 0){

		$_SESSION['numero']--;
	}

 ?>

 <h1> el valor es : <?= $_SESSION['numero'] ?></h1>
 <a href="ejercicio1.php?contar=1">subir</a><br>
 <a href="ejercicio1.php?contar=0">bajar</a><br>