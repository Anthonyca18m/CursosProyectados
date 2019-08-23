<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<!-- 
			Parametros por valor y parametros por referencia
															
			function Porvalor($valor){		function PorReferencia(){
	
			}								}
			La diferencia es que el por valor es la mas usada e no pierde la comunicación con el exterior
			en cambio por referencia si pierde la comunicación con el exterior y solo se enfoca en la funsion ejemplo:

	-->
<?php 

	function cambia_mayus_por_valor($param){
		$param = strtolower($param);
		return $param;
	}

	echo $param = "HoLa MuNdO<br>";

	echo cambia_mayus_por_valor("HOLA MUNDO");





	function cambia_mayus_por_referencia(&$param2){
		$param2 = strtolower($param2);
		$param2 = strtoupper($param2);
		return $param2;
	}

	echo $cadena = "<br><br><br><br>HoLa MuNdO";

	echo cambia_mayus_por_referencia($cadena);

	echo $cadena;
	
?>
</body>
</html>