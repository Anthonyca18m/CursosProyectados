<?php  //DE AQUI NOS VAMOS A VIEW PARA LLAMAR A ESTE ARCHIVO QUE MUESTRA LOS DATOS CON EL REQUIRE

	require_once("Model/ProductoModel.php");

	$producto = new ProductoModel();

	$matrizProductos = $producto->getProductos();

	require_once("View/ProductosView.php");


?>