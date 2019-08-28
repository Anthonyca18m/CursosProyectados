<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="buscar_ce.css"/>
</head>
<body>
<div class="container" id="container">
    <form class="formu" action="" method="POST" >
      <h2>Busca tu comprobante electrónico</h2>
      
      <p>Tipo de Documento:</p>
      <div class="select">
        <select class="tipo_doc" id="tipo_doc" name="tipo_doc">
            <option value="1">SELECCIONE</option>
            <option value="2">BOLETA DE VENTA ELECTRÓNICA</option>
            <option value="3">FACTURA ELECTRÓNICA</option>
            <option value="4">NOTA DE CRÉDITO</option>
            <option value="5">NOTA DE DÉBITO</option>
        </select>
      </div>
      <div class="clase_emision">
      <p>Fecha de emisión:</p>
        <input type="date" id="fecha_emi" name="fecha_emi" required="required"></input>
      </div>
      <div class="clase_serie">
      <p>SERIE:</p>
        <input type="text" id="serie" name="serie" required="required" placeholder="INGRESE SU SERIE,EJ. B001"></input>
      </div>
      <div class="clase_numero">
      <p>Número:</p>
        <input type="text" id="numero" name="numero" required="required"></input>
      </div>
      <div class="clase_cliente">
      <p>Documento DNI/CE/RUC clientes:</p>
        <input type="text" id="doc_cliente" name="doc_cliente" required="required"></input>
      </div>
      <div class="clase_enviar">
      <button id="enviardatos" name="enviardatos">Buscar</button>
    	</div>
    </form>
</div>
<?PHP 
	include("conexion.php");//CONEXION A DB
	
	if(isset($_POST['enviardatos'])){
		$tipo_doc = $_POST['tipo_doc'];
		$fech_emi = $_POST['fecha_emi'];
		$serie = $_POST['serie'];
		$numero = $_POST['numero'];
		$doc_cliente = $_POST['doc_cliente'];
		
		if(!empty($tipo_doc) && !empty($fech_emi) && !empty($serie) && !empty($numero) && !empty($doc_cliente)){
			$consulta = "SELECT * FROM cliente c INNER JOIN facturas f on c.id_cliente = f.id_cliente WHERE c.dni=".$doc_cliente." AND f.fecha='$fech_emi'";
			$registros = mysqli_query($conex,$consulta);
				while($rs = mysqli_fetch_array($registros))
					{
						$cantidad = $rs['cantidad'];
						$precio_venta = $rs['precio_venta'];
						$total = $cantidad * $precio_venta;
						
						echo 
						"
						  <table>
							<tr>
							  <td><b><center>Cliente</center></b></td>
							  <td><b><center>Documento</center></b></td>
							  <td><b><center>Total de Venta</center></b></td>
							  <td><b><center>Descargas</center></b></td>
							</tr>
							<tr>
							  <td>".$rs['nombre_cliente']."</td>
							  <td><center>".$rs['dni']."</center></td>
							  <td><center>$total</center></td>
							  <td><center><a href='#'>XML</a> /  <a href='#'>PDF</a></td>
							</tr>
							<tfoot>
							<tr><td colspan='4'>Developers Technologies</td></tr>
							</tfoot>
						  </table>
						";
					}
			}else {
				echo "";
				}
		}else{
			echo "";
			}
			mysqli_close($conex);
?>
</body>
</html>
