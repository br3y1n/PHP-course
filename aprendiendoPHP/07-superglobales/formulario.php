<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>mi formulario</title>
</head>
<body>
	<h1> mi formulario</h1>
	<form method="GET" action="recibir.php">
		<h1> envia por GET</h1>
		<p>
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre"/>
		</p>
		<p>
			<label for="apellido">Apellido</label>
			<input type="text" name="apellido"/>
		</p>

		<input type="submit" value="enviar">

	</form>
		<form method="POST" action="recibir.php">
		<h1> envia por POST</h1>
		<p>
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre"/>
		</p>
		<p>
			<label for="apellido">Apellido</label>
			<input type="text" name="apellido"/>
		</p>

		<input type="submit" value="enviar">

	</form>

</body>
</html>