<?php 


	$texto_mail = $_POST['comentarios'];
	$destinatario = $_POST['email'];
	$asunto = $_POST['asunto'];

	//PARA MEJORAR LA TRANSMISION DE MENSAJE PARA DIFERENTES PAISES
	$headers = "MIME-Version: 1.0\r\n";

	//el punto sirve para concatenar algo a la variable
	$headers.= "Content-type: text/html; charset=iso-8859-1\r\n";
	// de quien esta mandando el correo
	$headers.= "From: Prueba Anthony < Anthonyca18m@gmail.com >\r\n";

	$exito = mail($destinatario, $asunto, $texto_mail, $headers);

	if($exito){
		echo "Se ha enviado el mensaje con exito!";
	}else{
		echo "Intentelo nuevamente.";
	}


 ?>