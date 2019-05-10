<?php 

	/*
		recoger 2 numeros por la URL (GET) y hacer las operaciones basicas de una calculadora
	*/


		if(isset($_GET['numero1']) && isset($_GET['numero2'])){
		$numero1 = $_GET['numero1'];
		$numero2 = $_GET['numero2'];

		echo 'la suma es: '.($numero1+$numero2).'<br>';
		echo 'la resta es: '.($numero1-$numero2).'<br>';
		echo 'la multiplicacion es: '.($numero1*$numero2).'<br>';
		echo 'la division es: '.($numero1/$numero2).'<br>';
	}else{
		echo 'no hay valores';
	}
;

 ?>