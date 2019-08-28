<?php 
	$host = "localhost";
	$db = "cursophpone";
	$user = "root";
	$pass = "";
	
	$conex = new mysqli($host, $user, $pass, $db);
	
	if($conex -> connect_errno){
		echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		}
?>