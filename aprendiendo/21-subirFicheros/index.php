<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Subir ficheros</title>
</head>
<body>
	<h1>subir archivos</h1>
	<form action="upload.php" method="POST" enctype="multipart/form-data">
		
		<input type="file" name="archivo">
		<input type="submit" value="enviar">
	</form>

	<h2> Listado de imagenes</h2>
	
		<?php 
			$gestor = opendir('./images');
			if($gestor){
				while (($image = readdir($gestor)) !== false) {
					if ($image != '.' && $image !='..') {
						echo '<li><img src="images/'.$image.'" width="200px" /></li>';
					}
				}
			}
		 ?>

	



</body>
</html>