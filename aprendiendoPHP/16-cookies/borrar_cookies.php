<?php 

if(isset($_COOKIE['micookie'])){

	unset($_COOKIE['micookie']);
	setcookie('micookie','',time()-1);
}
 ?>