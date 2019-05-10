<?php 
	
	//abrir archivo como lectura
	$abrirArchivo = fopen('texto.txt', 'a+');

	while (!feof($abrirArchivo)){
		// obtiene el contenido de una linea y lo imprime
		$cotenido = fgets($abrirArchivo);
		echo $cotenido.'<br>';
	}

	// escribir en archivo
	fwrite($abrirArchivo,'texto desde php <br>');

	fclose($abrirArchivo);


	/* para copiar un fichero se usa 

		copy('texto.txt', 'textocopiado.txt') or die ('error');
		
		para renombrar
		raname('texto.txt', 'textodiferente.txt');
		
		para eliminar
		unlink('texto.txt') or die ('error');

		comprueba si el fichero existe
		if(file_exist('texto.txt')){
			echo 'existe';
		}



		*/

 ?>