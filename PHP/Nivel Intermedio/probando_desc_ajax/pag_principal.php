<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script   src="https://code.jquery.com/jquery-2.2.4.min.js" 
			  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
			  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<style type="text/css">
		th,tr,td{
			width: 100px;
			text-align: center;
		}
	</style>
</head>
<body>
	<div id="container">
		<table class="table table-hover">
		  <thead>
		    <tr>
		      <th scope="col">id</th>
		      <th scope="col">Cantidad</th>
		      <th scope="col">Nombre</th>
		      <th scope="col">Precio</th>
		      <th scope="col">Desc</th>
		      <th scope="col">Total</th>
		    </tr>
		  </thead>
		  <tbody>
		<?php 

			require_once("../conexion.php");

			$realizar = mysqli_query($Conexion, "SELECT * FROM producto");

			while ($rs = mysqli_fetch_array($realizar)) {
				$id = $rs['id_producto'];
			
		?>
		    <tr>
		      <th scope="row">
		      	<input type="text" name="id_pro" id="id_pro" class="form-control control-sm" 
		      		value="<?php echo $rs['id_producto'];?>" disabled>
		      </th>

		      <td>
		      	<input type="text" name="cant_pro" id="cant_pro" class="form-control control-sm" 
		      		value="<?php echo $rs['cantidad_producto'];?>" disabled>	
		      </td>

		      <td>
				<input type="text" name="nom_pro" id="nom_pro" class="form-control control-sm" 
		      		value="<?php echo $rs['nombre_producto'];?>" disabled>	
		      </td>

		      <td>
				<input type="text" name="precio_pro" id="precio_pro" class="form-control control-sm" 
		      		value="<?php echo $rs['precio_producto'];?>" disabled>
		      </td>
		      <td>
				<input type="text" name="desc_pro" id="desc_pro" class="form-control control-sm" 
		      		value='<?php echo $rs['desc_pro']; ?>'>	
		      </td>
		      <td>
		      	<?php $cantidad = $rs['cantidad_producto'];
		      		  $precio =$rs['precio_producto'];
		      		  $desc = $rs['desc_pro'];
		      		  $total_desc = ($precio * $desc)/100;
		      		  $precio_total = ($precio * $cantidad) - $total_desc;

		      	?>

				<input type="text" name="total_pro" id="total_pro" class="form-control control-sm" 
		      		value="<?php echo  number_format($precio_total,2);?>">	
		      </td>
		    </tr>
		<?php } ?>
		  </tbody>
		</table>
	</div>
</body>
</html>
<script type="text/javascript">

	$(document).ready(function(){

		$('input').blur(function(){
			var id_pro = $("#id_pro").val();
			var nom_pro = $("#nom_pro").val();
			var cant_pro = $("#cant_pro").val();
			var precio_pro = $("#precio_pro").val();
			var desc_pro = $("#desc_pro").val();
			var total_pro = $("#total_pro").val();
			
		    $.ajax({
		        url: 		'update.php',
		        type: 		'POST',
		        dataType: 	'html',
		        data: 		  {id_pro:id_pro, nom_pro:nom_pro, cant_pro:cant_pro, precio_pro:precio_pro, desc_pro:desc_pro, total_pro:total_pro },
		        success: function(){
                	alert("Ha sido ejecutada la acción.");
                	console.log(id_pro,nom_pro,cant_pro,precio_pro,desc_pro,total_pro);
            	},
            	error: function(){
            		alert("Ha fallado la conexión");
            	}
		    });
		});
	});
</script>