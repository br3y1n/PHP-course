<?php  
	
	//recibe por get  de la URL visible  /?variavle=valor
	echo $_GET['nombre'].'<br>';
	echo $_GET['apellido'].'<br>';

	//recibe por POST no visible  los valores
	echo $_POST['nombre'].'<br>';
	echo $_POST['apellido'].'<br>';

	
	
?>