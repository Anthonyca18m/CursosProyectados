<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<!-- Modal -->
	<div class="modal fade" id="formRegistrarArt" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">REGISTRAR PRODUCTO</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	       	
	       	<form method="POST" action="insert.php">
			
			<label>Sección:</label>
			<select id="seccion" name="seccion" class="custom-select custom-select-sm" required="">
				<option value="0">SELECCIONAR</option>
				<option value="1">ROPA</option>
				<option value="2">CALZADO</option>
				<option value="3">ELECTRODOMESTICO</option>
				<option value="4">MUEBLES</option>
				<option value="5">OTROS</option>
			</select>

			<label>Nombre:</label>
			<input type="text" name="nom_art" id="nom_art" class="form-control form-control-sm" required="">
			
			<label>Precio:</label>
			<input type="text" name="precio_art" id="precio_art" class="form-control form-control-sm"  required="">
			
			<label>Fecha de Registro:</label>
			<input type="date" name="fecha_art" id="fecha_art" class="form-control form-control-sm" required="">
			
			<label>Importado:</label>
			<select id="importado" name="importado" class="custom-select custom-select-sm">
				<option value="0">SELECCIONAR</option>
				<option value="1">SI</option>
				<option value="2">NO</option>
			</select>
			
			<label>País</label>
			<select id="pais_art" name="pais_art" class="custom-select custom-select-sm">
				<option value="0">SELECCIONAR</option>
				<option value="1">PERÚ</option>
				<option value="2">COLOMBIA</option>
				<option value="3">ARGENTINA</option>
				<option value="4">MÉXICO</option>
				<option value="5">BOLIVIA</option>
			</select>


	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
	        <button type="submit" class="btn btn-success" id="registrar">Registrar</button>
	      </div>

		  </form>

	    </div>
	  </div>
	</div>
</body>
</html>
