<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CRUD</title>
<link rel="stylesheet" type="text/css" href="hoja.css">


</head>

<body>
<?php 
	
	include('conexion.php');
	
	/*$conexion = $base->query("SELECT * FROM user");
	$registros = $conexion->fetchAll(PDO::FETCH_OBJ);*/
	//<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<PAGINACION>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

  $datos_por_pagina = 10;
  
  $paginas = 1;
      
  if(isset($_GET['pag'])){
      if($_GET["pag"] == 1){
        header("Locaton:index.php");
      }else{
        $paginas = $_GET['pag'];
    }
  }

  $sql = "SELECT * FROM user ";

  $resultado = $base->prepare($sql);

  $resultado->execute(array());

  $num_filas = $resultado->rowCount();//cuenta cuantas filas devuelve el sql

  $total_paginas = ceil($num_filas/$datos_por_pagina);//devuelve cuantas paginas necesitaras y con la funcion ceil redondiamos la division para evitar decimales

  $empezar_desde = ($paginas-1) * $datos_por_pagina;


	$registros = $base->query("SELECT * FROM user LIMIT $empezar_desde,$datos_por_pagina")->fetchAll(PDO::FETCH_OBJ);


	
?>

<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>
<form action="<?php  echo $_SERVER['PHP_SELF']; ?>" method="post" id="form1">
  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">Id</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Dirección</td>
      <td class="sin"></td>

    </tr> 
   <?php
   		foreach($registros as $usuario):	
   ?>
		
   	<tr>
      <td><?php echo $usuario->id ?> </td>
      <td><?php echo $usuario->Nombre ?> </td>
      <td><?php echo $usuario->Apellido ?> </td>
      <td><?php echo $usuario->Direccion ?> </td>
 
      <td style="width: 150px;">
        <a href="Drop.php?id=<?php echo $usuario->id ?>">
          <input type='button' name='del' id='del' value='Borrar'>
        </a>
       <a href="editar.php?id=<?php echo $usuario->id ?>">
          <input type='button' name='up' id='up' value='Actualizar'>
        </a>
      </td>
    </tr> 
    <?php 
		endforeach; 
	?>      
	<tr>
	<td></td>
      <td><input type='text' name='Nom' size='10' class='centrado'></td>
      <td><input type='text' name='Ape' size='10' class='centrado'></td>
      <td><input type='text' name=' Dir' size='10' class='centrado'></td>
      <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td>
    </tr>
    <tr>
      <td colspan="4">
        <?php 
          for ($i=1; $i <= $total_paginas ; $i++) { 
      
            echo  " <a href='index.php?pag=" . $i . "'>". $i ."</a> ";
          }   
        ?>
      </td>
    </tr>    
  </table>
</form>

<?php 

	if(isset($_POST["cr"])){
		$nombre = $_POST["Nom"];
		$apellido = $_POST["Ape"];
		$direccion = $_POST["Dir"];
		
		$sql = "INSERT INTO user (Nombre, Apellido, Direccion) values(:nom, :ape, :dir)";
		
		$resultado = $base->prepare($sql);
		
		$resultado -> execute(array(":nom"=>$nombre, ":ape"=>$apellido, ":dir"=>$direccion)); //con asignasiones para evitar los sqlinjections
		
		header("Location:index.php");
		}
?>
<p>&nbsp;</p>
</body>
</html>