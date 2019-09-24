<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php  
	
	if (isset($_COOKIE["prueba2"])) {
		echo $_COOKIE["prueba2"];
	}else{
		echo "No existe";
	}
?>
</body>
</html>