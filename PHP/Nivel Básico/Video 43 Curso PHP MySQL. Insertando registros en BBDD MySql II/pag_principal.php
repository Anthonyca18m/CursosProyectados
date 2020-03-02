<!DOCTYPE html>
<html>
<head>

	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- LINKS POR DEFECTO DE BOOSTRAP PARA APROVECHAR TODOS SUS FX-->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<style type="text/css">
.container {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  width: 80%;
  height: 600px;
}
table{
	text-align: center;
}
</style>
</head>
<body>
<div class="container">
	<table class="table table-hover" id="registros">
	  <thead>
	    <tr>
	      <th scope="col">Código</th>
	      <th scope="col">Sección</th>
	      <th scope="col">Nombre</th>
	      <th scope="col">Precio</th>
	      <th scope="col">Fecha de Registro</th>
	      <th scope="col">Importado</th>
	      <th scope="col">País</th>
	      <th scope="col">
	      	<button type="button" class="btn btn-success" id="btn_reg_art">Add</button>
	      </th>

	    </tr>
	  </thead>
	
	  <tbody>
	  	<?php 
		require_once("../conexion.php");
		$consulta = "SELECT * FROM producto_clase43 ";
		$registros = mysqli_query($Conexion, $consulta);
		while ($rs = mysqli_fetch_array($registros, MYSQLI_ASSOC)) {
			$cod = $rs['cod_art'];
			$seccion = $rs['seccion'];
			$nom = $rs['nom_art'];
			$precio = $rs['precio_art'];
			$fecha = $rs['fecha_art'];
			$import = $rs['importado_art'];
			$pais = $rs['pais_art'];
	 ?>
	    <tr>
	      <td><strong><?php echo $cod; ?></strong></td>
	      <td>
	      	<?php
	      	 if($seccion == 1){
	      	 	echo "ROPA";
	      	 }else if($seccion == 2){
	      	 	echo "CALZADO";
	      	 }else if($seccion == 3){
	      	 	echo "ELECTRODOMESTICO";
	      	 }else if($seccion == 4){
	      	 	echo "MUEBLES";
	      	 }else if($seccion == 5){
	      	 	echo "OTROS";
	      	 }
	      	?>
	      	
	      </td>
	      <td><?php echo $nom; ?></td>
	      <td>S/<?php echo $precio; ?></td>
	      <td><?php echo $fecha; ?></td>
	      <td>
	      	<?php
	      	 if($import == 1){
	      	 	echo "SI";
	      	 }else if($import == 2){
	      	 	echo "NO";
	      	 }
	      	?>
	      	
	      </td>
	      <td>
	      	<?php
	      	 if($pais == 1){
	      	 	echo "PERÚ";
	      	 }else if($pais == 2){
	      	 	echo "COLOMBIA";
	      	 }else if($pais == 3){
	      	 	echo "ARGENTINA";
	      	 }else if($pais == 4){
	      	 	echo "MÉXICO";
	      	 }else if($pais == 5){
	      	 	echo "BOLIVIA";
	      	 }
	      	?>
	      	
	      </td>
	    </tr>
	<?php 
		} 
	?>
	  </tbody>
	</table>
</div>
	
	
</body>
</html>
<!--AÑADIMOS EL MODAL Y LO LLAMAMOS -->
<?php 
	require_once("modal_insert_articulo.php"); 

?>
<script type="text/javascript">

	$("#btn_reg_art").click(function(){
	    $("#formRegistrarArt").modal("show");    
});
	$(document).ready( function () {
    $('#registros').DataTable();
} );

</script>