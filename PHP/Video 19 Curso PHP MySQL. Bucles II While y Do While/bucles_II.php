<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<!--
				BUCLE for

				for (iniciacion bucle; condicion del bucle; incremento/decremento bucle){
					tu codigo aqui....
				} 
	 -->
<?php 


	$tope = 10;

	for ($i=1; $i < $tope; $i++) { 
		echo "<P>Utilizando el bucle for $i<br> (INCREMENTANDO)</P>";
	}
		echo "---------------------------------------------";
	$tope2 = 1;

	for ($i=10; $i >= $tope2; $i--) { 
		echo "<P>Utilizando el bucle for $i<br> (DECREMENT)</P>";
	}
		echo "---------------------------------------------";
	$tope3 = 1;

	for ($i=10; $i >= $tope3; $i--) { 
		echo "<P>Utilizando el bucle for $i<br> (DECREMENT)</P>";
		if($i == 6){
			echo "<P>Se ha roto el for <br> (DECREMENT)</P>";
		break;
		}
	}


	$tope4 = 10;
		echo "---------------------------------------------<br>";
	for ($i=1; $i < $tope4; $i++) { 
		
		echo "La tabla del 9 x $i = " . 9*$i . ".<br>";
	}
		echo "---------------------------------------------<br>";
?>
</body>
</html>