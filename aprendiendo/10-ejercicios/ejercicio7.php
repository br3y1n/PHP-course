<?php 

	/* 
		hacer un programa que nos muestre todos los numeros impares entre 2 numeros que nos lleguen por get
	*/

		if(isset($_GET['num1']) && isset($_GET['num2'])){


			$num1=$_GET['num1'];
			$num2=$_GET['num2'];

			if($num1 > $num2){
				for ($i=$num2; $i <= $num1 ; $i++) { 
					$impar = $i%2;
					if($impar != 0 ){
						echo $i.'<br>';
					}
				}
			}else if($num1 < $num2){
				for ($i=$num1; $i <= $num2 ; $i++) { 
					$impar = $i%2;
					if($impar != 0 ){
						echo $i.'<br>';
					}
				}
			}else{
				echo 'los numero son iguales: '.$num1.'<br>';
			}
				
		}else{
			echo 'registre valores';
		}

 ?>