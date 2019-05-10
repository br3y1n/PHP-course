<?php 

	//programa que compruebe si una variable esta vacia y si lo esta, rellenarla con texto en minuscula y mostrarlo en mayusculas y negrita


	$cantante = ['', 'luis', ''];

for ($i=0; $i < count($cantante); $i++) { 
		if(!trim($cantante[$i])){
		$cantante[$i] = 'modificacion - '.$i;
		echo '<b>'.strtoupper($cantante[$i]).'</b>'.'<br>';
		}
}

echo 'el array es : <br>';

foreach ($cantante as $key) {
	echo $key.'<br>';
}
	
 ?>