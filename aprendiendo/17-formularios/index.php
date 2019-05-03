<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>formularios</title>
</head>
<body>
	<h1>formulario</h1>
	<form action="" method="POST" enctype="multipart/form-data">
		<p>
			<label for="nombre"> Nombre: </label>
			<input type="text" name="nombre" placeholder="ingrese nombre"
			value="" >
		</p>
		<p>
			<label for="apellido"> Apellido: </label>
			<input type="text" name="apellido" value="" placeholder="ingrese apellido" maxlength="">


		</p>
		<p><input type="submit" name="enviar"></p>




	</form>

	<label for="email"> email: </label>
	<input type="email" name="email" ><br>

	<label for="fecha"> fecha: </label>
	<input type="date" name="fecha" ><br>

	<label for="color"> color: </label>
	<input type="color" name="color" ><br>

	<label for="check"> hombre: </label>
	<input type="checkbox" name="check" ><br>


	<label for="archivo"> archivo: </label>
	<input type="file" name="archivo" multiple="multiple" ><br>

	<label for="numero"> numero: </label>
	<input type="number" name="numero" ><br>

	<label for="hidden"> hidden: </label>
	<input type="hidden" name="hidden" ><br>

	<label for="password"> password: </label>
	<input type="password" name="password" ><br>

	<label for="url"> url: </label>
	<input type="url" name="url" ><br>

	<label for="radiobutton"> radiobutton: </label>
	<input type="radio" name="radiobutton" value="hola2" ><br>
	<input type="radio" name="radiobutton" value="hola"><br>


</body>
</html>