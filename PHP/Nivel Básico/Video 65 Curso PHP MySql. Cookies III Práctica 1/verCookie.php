<?php  

	if (!isset($_COOKIE['idioma_pref'])) {
		header("Location:seleccioneidioma.php");

	}else if($_COOKIE['idioma_pref'] == "es"){
		header("Location:spanish.php");

	}else if($_COOKIE['idioma_pref'] == "en"){
		header("Location:english.php");
		
	}
?>