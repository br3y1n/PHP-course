<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="utf-8">
	<title>Validad form</title>
</head>
<body>
	<form method="POST" action="procesarform.php">
		<label for="nombre"> Nombre</label><br>
		<input type="text" name="name" required="required" pattern="[A-Za-z]+"><br>
		
		<label for="apellido"> Apellido</label><br>
		<input type="text" name="apellido" required="required" pattern="[A-Za-z]+"><br>

		<label for="edad"> Edad</label><br>
		<input type="number" name="edad" required="required" pattern="[0-9]+"><br>

		<label for="email"> Email</label><br>
		<input type="email" name="email" required="required"><br>

		<label for="password"> password</label><br>
		<input type="password" name="password" required="required"><br>

		<input type="submit" value="Enviar">

	</form>
</body>
</html>