<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Formulario</title>
</head>
<body>
	<h1> Mi formulario</h1>
	<form method="GET" action="guardar.php">
		<label for="titulo">Titulo:</label><br>
		<input type="text" name="titulo"><br>
		<label for="texto">Descripcion:</label><br>
		<textarea name="texto"></textarea><br>
		
		<input type="submit" name="enviar" value="Enviar"><br>

	</form>
</body>
</html>