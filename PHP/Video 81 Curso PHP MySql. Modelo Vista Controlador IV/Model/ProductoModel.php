<?php 

	/**
	 * 
	 */
class ProductoModel	{ // DE AQUI UNA VES QUE CREAMOS TODAS LAS FUNCIONES QUE QUIERAS NOS VAMOS AL CONTROLLERS
		
		private $db;

		private $productos;


		public function __construct(){

			require_once("Model/Conexion.php");

			$this->db = Conectar::Conexion();

			$this->productos = array();
		}

		public function getProductos(){

			$sql = $this->db->query("SELECT * FROM producto");

				while ($rs = $sql->fetch(PDO::FETCH_ASSOC)) {
						
					$this->productos[] = $rs;
				}

				return $this->productos;
			}
}

?>