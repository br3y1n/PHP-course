<?php 

	/*crear un array array con el contenido de una tabla: e imprimirlo en html
	
	ACCION AVENTURA	DEPORTES
	GTA    ASSASINS	FIFA
	GOD    CRASH    PES 
	PUGB   PRINCIPE MOTO 
	
	CADA COLUMNA DEBE IR EN UN INCLUDE SEPARADO
	*/

	$tabla = array(array(
					'ACCION',
					'AVENTURA',
					'DEPORTES'
					),
					array(
					'gta',
					'assasins',
					'fifa'
					),
					array(
					'god',
					'crash',
					'pes'
					),
					array(
					'pugb',
					'principe',
					'moto'
					));

	echo '<table border="1">';
	foreach ($tabla as $index => $val) {	
			echo '<tr>';
			foreach ($val as $key) {
				echo '<td>'.$key.'</td>';
			}
			echo '</tr>';
	}
	echo '</table>';
 ?>