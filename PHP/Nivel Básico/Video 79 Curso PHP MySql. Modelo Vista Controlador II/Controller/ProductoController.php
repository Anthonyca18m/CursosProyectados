<?php  

	require_once("Model/ProductoModel.php");

	$producto = new ProductoModel();

	$matrizProductos = $producto->getProductos();

	require_once("View/ProductosView.php");


?>