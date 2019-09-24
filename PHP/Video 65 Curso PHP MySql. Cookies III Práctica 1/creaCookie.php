<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php  

		$idioma_pref = $_GET['idioma'];

		setcookie("idioma_pref", $idioma_pref, time()+86400);

		header("Location:verCookie.php");

	?>
</body>
</html>