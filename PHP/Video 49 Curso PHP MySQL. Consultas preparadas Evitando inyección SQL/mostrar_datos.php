<!DOCTYPE html>
<html>
<head>

	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    	<!-- LINKS POR DEFECTO DE BOOSTRAP PARA APROVECHAR TODOS SUS FX-->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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
	      <th scope="col">Id</th>
	      <th scope="col">Nombre</th>
	      <th scope="col">Apellido</th>
	      <th scope="col">Dirección</th>
	      <th scope="col">User</th>
	      <th scope="col">Pass</th>
	      </th>
	    </tr>
	  </thead>
	
	  <tbody>
	  	<?php 
		require_once("../conexion.php");

		$pass = $_GET['pass'];

		$consulta = "SELECT * FROM user WHERE pass = ?";
		
		$realizar = mysqli_prepare($Conexion, $consulta);

		$pre_resultado = mysqli_stmt_bind_param($realizar, "s", $pass);

		$pre_resultado = mysqli_stmt_execute($realizar);

		if($pre_resultado == false){
			echo "Hay fallas";
		}else{
			$pre_resultado = mysqli_stmt_bind_result($realizar, $id, $nombre, $apellido, $direccion, $user, $pass);

		while (mysqli_stmt_fetch($realizar)) {
	 ?>
	    <tr>
	     	<td><center><?php echo $id; ?></center></td>
	     	<td><center><?php echo $nombre; ?></center></td>
	     	<td><center><?php echo $apellido; ?></center></td>
	     	<td><center><?php echo $direccion; ?></center></td>
	     	<td><center><?php echo $user; ?></center></td>
	     	<td><center><?php echo $pass; ?></center></td>
	    </tr>
	<?php 
		}
	}
	?>
	  </tbody>
	</table>
</div>

</body>
</html>
