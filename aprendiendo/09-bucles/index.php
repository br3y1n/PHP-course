<?php 

	// bucle while se repite siempre mientras sea true
	$conteo=0;

	while ($conteo <=10) {
		echo $conteo.'<br>';
		$conteo++;
	}




	// realiza incrementos de un variable definida internamente y la evalua hasta que deje de cumplirse la condicion

	for ($i=0; $i <	20 ; $i++) { 
		echo $i.'<br>';
	}
	echo '<hr/>';

	if(isset($_GET['value'])){

		echo $_GET['value'];
	}

	echo '<hr/>';




	// do while
	$edad=1;

	do{

		echo 'edad '.$edad.'<br>';
		$edad++;
	}while ($edad <= 10);


							
 ?>

