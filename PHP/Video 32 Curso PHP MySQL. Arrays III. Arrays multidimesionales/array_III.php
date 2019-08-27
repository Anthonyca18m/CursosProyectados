<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<!-- 
	ARRAYS MULTIDIMENSIONALES
    	
-->
<?php 

	$alimentos = array("frutas"=>array("tropical"=>"kiwi","citrico"=>"mandarina","otros"=>"manzana"),
					   
					    "leche"=>array("animal"=>"vaca","vegetal"=>"coco"),
						
						"carne"=>array("vacuno"=>"lomo","porcino"=>"pata")
					  );
	
	echo $alimentos["carne"]["vacuno"];
	
	//recorremos 
	echo "<br><br><br>----------------------------------------------<br><br><br>";
	
	foreach($alimentos as $primernivel=>$valor){
		echo "$primernivel<br>";
		
		while(list($clave,$valor2)=each($valor)){
				echo "$clave ... $valor2<br>";
			}
			echo "<br>";
	}
	
	echo "<br><br><br>----------------------------------------------<br><br><br>";
	
	echo var_dump($alimentos);//con esta funcion de PHP recorremos el arreglo sin tanta weba... :v
	
?>
<body>
</body>
</html>