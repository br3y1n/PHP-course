<?php 

	//crear un script que tenga 4 variables, una de tipo array, otra string, otra int y otra booleana y que imprima un mensaje segun el tipo

	$inte = 1234;
	$strin = '"textoo"';
	$vector = array (1,2,3);
	$verdad = true;


	echo 'la variable '.$inte.' es de de tipo '.gettype($inte).'<br>';
	echo 'la variable '.$strin.' es de de tipo '.gettype($strin).'<br>';
	echo 'la variable '.$vector.' es de de tipo '.gettype($vector).'<br>';
	echo 'la variable '.$verdad.' es de de tipo '.gettype($verdad).'<br>'; 

 ?>