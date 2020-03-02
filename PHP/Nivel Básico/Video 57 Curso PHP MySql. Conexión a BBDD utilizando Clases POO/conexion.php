<?php  

	require_once("config.php");

	/**
	 * 
	 */
	class Conexion{
		
		protected $conexion_db;

		public function Conexion(){
			
			$this->conexion_db = new mysqli(DB_HOST,DB_USUARIO,DB_PASSWORD,DB_NAME);//LLAMANDO LAS CONSTANTES DE CONFIG

			if ($this->conexion_db->connect_errno) {
				
				echo "Fallo al conectar a Mysql : " . $this->conexion_db->connect_error;//llamando al error si en caso
				
				return;
			}

			$this->conexion_db->set_charset(DB_CHARSET);//PARA LAS TILDES Y CARACTERES ESPECIALES
		}
	}

?>