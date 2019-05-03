<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title> Imprimir por pantalla</title>
</head>
<body>
	<h1>Imprimiendo</h1>
	<?php 
		echo '<h2> Lista </h2>';
		echo '<ul>'
			.'<li> GTA </li>'
			.'<li> Pes </li>'
			.'<li> fifa </li>'
			.'<li> AOE </li>'
			.'</ul>';

		echo '<p> Esta es toda la lista'.' - '.'lista de juegos </p>';
		// el <?= es un atajo al php echo
	 ?>

	 <?= 'El mejor curso de php, echo atajado "?="'; ?>
</body>
</html>