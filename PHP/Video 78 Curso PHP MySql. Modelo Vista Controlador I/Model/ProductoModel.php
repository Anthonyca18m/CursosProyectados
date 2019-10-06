<?php 

	/**
	 * 
	 */
class ProductoModel	{
		
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