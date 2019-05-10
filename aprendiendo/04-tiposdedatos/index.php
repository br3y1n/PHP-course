<?php 
	
	//entero o int o integer
	//flotante o decimales o float o double
	//caracteres texto o string
	//booleanos o bool = true o false
	// nulo o null
	//vector o array
	//objetos

	$numero = 90;
	$numerodouble = 90.999;
	$texto = 'hola';
	$verdad=true;
	$null=null; // no tiene nada

	//array
	$arrays[]= 'uno';
	$arrays[]= 'dos';
	$arrays[]= 'tres';


	// gettype obtiene el tipo e dato
	echo gettype($numero).'<br>';
	echo gettype($numerodouble).'<br>';
	echo gettype($texto).'<br>';
	echo gettype($verdad).'<br>';
	echo gettype($null).'<br>';

	var_dump($arrays);
 ?>