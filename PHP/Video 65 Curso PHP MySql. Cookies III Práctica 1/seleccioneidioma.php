<?php  
	
	if (isset($_COOKIE['idioma_pref'])) {

	 	if($_COOKIE['idioma_pref'] == "es"){
		header("Location:spanish.php");

		}else if($_COOKIE['idioma_pref'] == "en"){
			header("Location:english.php");
			
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dando Utilidad a las cookies</title>
</head>
<body>
	<div style="margin: auto;">
		<center>
			<h1>Elige el idioma:</h1>
			
			<a href="creaCookie.php?idioma=en">
			<img src="https://i1.wp.com/oij.org/wp-content/uploads/2017/02/bandera-ingl%C3%A9s.png?ssl=1" style="width: 100px;height: 60px;">
			</a>
			
			<a href="creaCookie.php?idioma=es">
			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Flag_of_Spain.svg/1200px-Flag_of_Spain.svg.png" style="width: 100px;height: 60px;">
			</a>
		</center>
	</div>
</body>
</html>