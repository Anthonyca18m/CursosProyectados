<?php 

	/**
	 * 
	 */
class ProductoModel	{ // DE AQUI UNA VES QUE CREAMOS TODAS LAS FUNCIONES QUE QUIERAS NOS VAMOS AL CONTROLLERS
		
		private $db;

		private $productos;


		public function __construct(){

			require_once("Conexion.php");

			$this->db = Conectar::Conexion();

			$this->productos = array();
		}

		public function getProductos(){

			require_once("Paginacion.php");

			$sql = $this->db->query("SELECT * FROM producto LIMIT $inicio, $datos_por_pagina");//jalamos las variables de paginacion.php

				while ($rs = $sql->fetch(PDO::FETCH_ASSOC)) {
						
					$this->productos[] = $rs;
				}

				return $this->productos;
			}

		public function insertProductos($nombre, $cantidad, $precio){

			$sql = $this->db->query( 
				"INSERT INTO producto (nombre_producto, cantidad_producto, precio_producto) VALUES($nombre, $cantidad, $precio)" );


		}
}

?>