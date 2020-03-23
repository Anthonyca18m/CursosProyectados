<?php
	
	class Conectar{
		
		public static function Conexion(){

			try {
				
				$conexion = new PDO("mysql:host=localhost; dbname=cursophpone", "root", "");

				$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$conexion->exec("SET CHARACTER SET UTF8");
			} catch (Exception $e) {
				
				die("Error: " . $e->getMessage());

				echo "Error en la línea: " . $e->getLine();
			}

			return $conexion;
		}
	}
?>