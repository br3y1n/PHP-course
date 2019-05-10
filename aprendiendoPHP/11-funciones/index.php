<?php 

	// funciones

function muestraNombres(){

	echo 'nombre 1 <br>';
	echo 'nombre 2 <br>';
	echo 'nombre 3 <br>' ;
	echo 'nombre 4 <br>';
}
 // invocar funcion para que ejecute

muestraNombres();
muestraNombres();
muestraNombres();

function multiplicar($numero){
	for ($i=1; $i <= 10; $i++) { 
		echo $numero.' x '.$i.' = '.($i*$numero).'<br>';
	}
}

echo '<hr/>';
multiplicar(7);

echo '<hr/>';
// el $negrita se inicia en false y no es un parametro obligatorio, pero si suceptible a cambios


//echo dentro de una funcion no es una buena practica

function mult($num1, $num2, $negrita = false){ 
	if ($negrita) {
		echo '<strong>';
	}
		echo $num1.' x '.$num2.' = '.($num1*$num2).'<br>';
			if ($negrita) {
		echo '</strong>';
	}
}

mult(3,4,true);

echo '<hr/>';

	// return es una buena practica

function devolvercadena($string){

	return 'tu nombre es: '.$string;
}

echo devolvercadena('brayan');



echo '<hr>';

	//funcion variable 

	function hola(){
		return 'holaaaaa que tal';
	}

	$quetal = 'hola';

	echo $quetal();

 ?>
