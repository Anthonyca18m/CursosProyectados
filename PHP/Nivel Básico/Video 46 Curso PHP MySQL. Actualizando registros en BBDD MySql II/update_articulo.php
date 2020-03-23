<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	<style type="text/css">
		body{
			background: #CBF7F0;
		}
		#Form_update{
			height: 400px;
			width: 400px;
			border-radius: 10px;
			border: 2px solid;
			position: relative;
		  	left: 450px;
		  	top: 100px;
		  	padding: 20px;
		  	background: #F8F4F4;
		}
	</style>
</head>
	<body>
	<div id="Form_update">
		<form method="POST" action="update.php">
		    <div class="form-row">
			    <div class="form-group col-md-6">
			    	<?php
			    		require_once("../conexion.php"); 
			    		$cod_art = $_GET['cod'];
			    		$consulta = "SELECT * FROM producto_clase43 WHERE cod_art='".$cod_art."'";
			    		$realizar = mysqli_query($Conexion, $consulta);
			    		while ($rs = mysqli_fetch_array($realizar)) {
			    			$cod_art = $rs['cod_art'];
			    			$seccion = $rs['seccion'];
							$nom = $rs['nom_art'];
							$precio = $rs['precio_art'];
							$fecha = $rs['fecha_art'];
							$import = $rs['importado_art'];
							$pais = $rs['pais_art'];
			    	 ?>
			    	<input type="hidden" name="cod" id="cod" value="<?php echo $cod_art; ?>">
			        <label>Sección:</label>
					<select id="seccion" name="seccion" class="custom-select custom-select-sm">
						<option value="0">SELECCIONAR</option>
						<?php 
							if($seccion == 1){
						?>				
						<option <?php echo "selected"; } ?> value="1">ROPA</option>
						<?php 
							if($seccion == 2){
						?>	
						<option <?php echo "selected"; } ?> value="2">CALZADO</option>
						<?php 
							if($seccion == 3){
						?>	
						<option <?php echo "selected"; } ?> value="3">ELECTRODOMESTICO</option>
						<?php 
							if($seccion == 4){
						?>	
						<option <?php echo "selected"; } ?> value="4">MUEBLES</option>
						<?php 
							if($seccion == 5){
						?>	
						<option <?php echo "selected"; } ?> value="5">OTROS</option>
						<option value="1">ROPA</option>
						<option value="2">CALZADO</option>
						<option value="3">ELECTRODOMESTICO</option>
						<option value="4">MUEBLES</option>
						<option value="5">OTROS</option>
					</select>
			    </div>
			    <div class="form-group col-md-6">
			      <label>Nombre:</label>
				<input type="text" name="nom_art" id="nom_art" class="form-control form-control-sm" value="<?php echo $nom;?>">
			    </div>
	  		</div>
			<div class="form-group">
			    <label>Precio:</label>
				<input type="text" name="precio_art" id="precio_art" class="form-control form-control-sm"  value="<?php echo $precio;?>">
			</div>
	  		<div class="form-row">
	    		<div class="form-group col-md-6">
	      			<label>Importado:</label>
					<select id="importado" name="importado" class="custom-select custom-select-sm">
						<?php 
							if($import == 1){
						?>	
						<option <?php echo "selected"; } ?> value="1">SI</option>	
						<?php 
							if($import == 2){
						?>
						<option <?php echo "selected"; } ?> value="2">NO</option>
						<option value="1">SI</option>
						<option value="2">NO</option>
					</select>
	    		</div>
	    	<div class="form-group col-md-4">
	        	<label>País</label>
				<select id="pais_art" name="pais_art" class="custom-select custom-select-sm">
					<option value="0">SELECCIONAR</option>
					<?php 
							if($pais == 1){
						?>
					<option <?php echo "selected"; } ?> value="1">PERÚ</option>
					<?php 
							if($pais == 2){
						?>
					<option <?php echo "selected"; } ?> value="2">COLOMBIA</option>
					<?php 
							if($pais == 3){
						?>
					<option <?php echo "selected"; } ?> value="3">ARGENTINA</option>
					<?php 
							if($pais == 4){
						?>
					<option <?php echo "selected"; } ?> value="4">MÉXICO</option>
					<?php 
							if($pais == 5){
						?>
					<option <?php echo "selected"; } ?> value="5">BOLIVIA</option>
					<option value="1">PERÚ</option>
					<option value="2">COLOMBIA</option>
					<option value="3">ARGENTINA</option>
					<option value="4">MÉXICO</option>
					<option value="5">BOLIVIA</option>
				</select>
	    	</div>
			<?php } ?>
	  			<input type="submit" name="btn_actualizar" id="btn_actualizar" class="btn btn-primary" value="Actualizar">
	  	</form>
	  		
	</div>
			<a href="pag_principal.php">
	  			<button class="btn btn-danger">Cancelar</button>
	  		</a>
	</body>
</html>
