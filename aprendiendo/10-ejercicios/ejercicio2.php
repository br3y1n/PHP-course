<?php 

	/* escribir un script que nos devuelva todos los numeros pares del 1 a 100*/


	for ($i=1; $i<=100  ; $i++) { 
		$par = $i%2;

		if ($par == 0) {
			echo $i.'<br>';
		}

	}

 ?>