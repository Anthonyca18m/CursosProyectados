<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		#login{
			width: 280px;
			padding: 40px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			background: rgb(90,82,103);
			text-align: center;
			border-radius: 20px;
		}
	</style>
</head>
<body>
	<form id="login" method="GET" action="mostrar_datos.php">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Email</label>
	    <input type="email" class="form-control" id="user" name="user" aria-describedby="emailHelp" placeholder="Enter email">
	    <small id="emailHelp" class="form-text text-muted">
			Nunca compartiremos su correo electrónico con nadie más.
		</small>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" class="form-control" id="pass" name="pass" pslaceholder="Password">
	  </div>
	  <button type="submit" class="btn btn-primary">Entrar</button>
	</form>

</body>
</html>