<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<!--
		2 tipos:
		INDETERMINADOS:
			*While
			*Do-While
		DETERMINADOS:
			*for
	 -->
	 

<?php 
	
	$var1 = 1;

	while ($var1 <= 10) {
		echo "aqui aumentando de level en PHP con While $var1<br>";
		$var1++;
	}
	echo "FIN<br>";

	$var2 = 1;
	do {
		$var2++;
		echo "aqui aumentando de level en PHP con Do-While $var1<br>";
	} while ($var2 <= 10);
?>
</body>
</html>