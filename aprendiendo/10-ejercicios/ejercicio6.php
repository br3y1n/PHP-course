<?php 

	/*
		Mostrar las tablas de multiplicacion del 1 al 10, en tablas html
	*/
		echo '<table border="1">';
		for ($i=0; $i <= 10 ; $i++) { 
			echo '<tr>';
			for ($j=1; $j <= 10 ; $j++){

				if($i == 0){
					echo '<th>'.'Tabla del: '.$j.'</th>';
				}else{
				echo '<td>'.$j.' * '.$i.' = '.($i*$j).'</td>';}
		}
			echo '</tr>';
		}
		echo '</table>';
 ?>