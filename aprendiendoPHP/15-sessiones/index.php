<?php 

	//almacena y persite datos del usario mientras navega

	//iniciar la seccion

session_start();
//var local
$variable_normal = 'hola soy una cadena de texto';

$_SESSION['VARIABLE_PERSISTENTE'] = 'HOLA SOY UNA SESSION ACTIVA';	

echo $variable_normal;
echo $_SESSION['VARIABLE_PERSISTENTE'];
 ?>