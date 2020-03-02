<?php  

	require_once("conexion.php");

	/**
	 * 
	 */
class Devuelve_registros extends Conexion{ //heredando de la clase Conexion
		
		public function Devuelve_registros(){
			
			parent::__construct();//llamando al constructor
		}
		// CON PDO------------------------------------------
		

		// public function BuscarPorPais($pais){

		// 	$sql = "SELECT * FROM producto_clase43 WHERE pais_art = '" . $pais . "'";

		// 	$sentencia = $this->conexion_db->prepare($sql);

		// 	$sentencia->execute(array());

		// 	$resultados = $sentencia->fetchAll(PDO::FETCH_ASSOC);

		// 	$sentencia->closeCursor();

		// 	return $resultados;

		// 	$this->conexion_db = null;
		// }

		 //CON MYSQLI------------------------------------------
		 public function getRegistros(){

		 	$resultados = $this->conexion_db->query('SELECT * FROM producto_clase43');

		 	$registros = $resultados->fetch_all(MYSQLI_ASSOC);

		 	return $registros;
		 }

		//buscar con parametro

		 public function BuscarPorPais($pais){

		 	$resultados = $this->conexion_db->query("SELECT * FROM producto_clase43 WHERE pais_art = '" . $pais ."'");

		 	$registros = $resultados->fetch_all(MYSQLI_ASSOC);

			return $registros;
		}

	}

?>