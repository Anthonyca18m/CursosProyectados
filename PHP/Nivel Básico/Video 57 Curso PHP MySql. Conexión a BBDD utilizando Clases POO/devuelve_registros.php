<?php  

	require_once("conexion.php");

	/**
	 * 
	 */
	class Devuelve_registros extends Conexion{ //heredando de la clase Conexion
		
		public function Devuelve_registros(){
			
			parent::__construct();//llamando al constructor
		}


		public function getRegistros(){

			$resultados = $this->conexion_db->query('SELECT * FROM producto_clase43');

			$registros = $resultados->fetch_all(MYSQLI_ASSOC);

			return $registros;
		}
	}

?>