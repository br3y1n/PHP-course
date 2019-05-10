<?php
$error = 'error';

if(isset($_POST['name']) && isset($_POST['apellido']) && isset($_POST['edad']) && isset($_POST['email'])){
	
	$error = 'ok';


$name = $_POST['name']

} else{
	$error = 'error';
	header("location:index.php?error=$error");
}
?>
