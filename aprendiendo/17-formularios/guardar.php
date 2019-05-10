<?php 
	
	if(isset($_GET['titulo']) && isset($_GET['texto'])){

		echo '<h1>'.$_GET['titulo'].'</h1><br>';
		echo $_GET['texto'].'<br>';
	}
 ?>