<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<!-- 
			LLAMADA A MÉTODOS CON PARÁMETROS
			REUTILIZACIÓN DE CÓDIGO
	-->

<?php 
	//creamos una clase
	class Coche{

		private $ruedas;
		var $ventanas;
		var $color;
		var $precio;

		//Creamos un Método Constructor
		function Coche(){
			$this->ruedas = 4;
			$this->ventanas = 4;
			$this->color = "";
			$this->precio = 1000;
		}

		function Arrancar(){
			echo "Estoy arrancando<br>";
		}

		function Girar(){
			echo "Estoy girando<br>";
		}

		function Frenar(){
			echo "Estoy frenando<br>";
		}

		function establecerColor($colorCoche){
			$this->color = $colorCoche;
			echo "El color de este coche es: " . $this->color . "<br>";
		}

		function establecerColoryNombre($colorCoche, $nombreCoche){
			$this->color = $colorCoche;
			echo "El color de este $nombreCoche coche es: " . $this->color . "<br>";
		}

	}
	/* REUTILIZANDO CÓDIGO*/
class Camion extends Coche{

		var $ruedas;
		var $ventanas;
		var $color;
		var $precio;

		//Creamos un Método Constructor
		function Camion(){
			$this->ruedas = 8;
			$this->ventanas = 2;
			$this->color = "";
			$this->precio = 10000;
		}

		function Arrancar(){
			echo "Estoy arrancando<br>";
		}

		function Girar(){
			echo "Estoy girando<br>";
		}

		function Frenar(){
			echo "Estoy frenando<br>";
		}

		function establecerColor($colorCoche){
			$this->color = $colorCoche;
			echo "El color de este coche es: " . $this->color . "<br>";
		}

		

	}

?>
</body>
</html>