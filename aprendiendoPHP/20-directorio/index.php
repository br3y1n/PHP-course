<?php 	

	//crea carpeta si no existe
	if(!is_dir('mi_carpeta')){
	mkdir('mi_carpeta', 0777) or die ('imposible crear');
	echo 'existe <br>';
	}else{
		echo 'no existe, se creo <br>';
	}


	echo '<hr>';
	//abre el directorio (carpeta)
	if ($gestor = opendir('./mi_carpeta')){

		//valida si hay archivos dentro del directorio (lee)
		while (false !== ($archivos = readdir($gestor))){
			if ($archivos != '.' && $archivos != '..') {
				echo $archivos.'<br>';
			}
			
		}
	}

 ?>