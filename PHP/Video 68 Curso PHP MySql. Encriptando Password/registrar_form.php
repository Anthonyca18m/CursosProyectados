<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<style type="text/css">
	form{
		width: 400px;
		height: 400px;
		position: relative;
		top: 200px;
		left: 35%;
	}
	</style>
</head>
<body>
	<form action="insert_hash.php" method="POST">

	  <div class="form-group">
	    <label for="exampleInputEmail1">Correo Electrónico</label>
	    <input type="email" class="form-control" id="user" name="user" aria-describedby="emailHelp" placeholder="Ingresar email">
	    <small id="emailHelp" class="form-text text-muted">No comparta su correo con nadie.</small>
	  </div>

	  <div class="form-group">
	    <label for="exampleInputPassword1">Contraseña</label>
	    <input type="password" class="form-control" id="pass"name="pass" placeholder="Ingresar Contraseña">
	  </div>

	    <button type="submit" class="btn btn-success" name="enviar">Registrar</button>
	</form>
</body>
</html>