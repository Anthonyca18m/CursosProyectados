<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
	<!--
    	VERIFICAR SI ES O NO ES UN ARRAY
        
        RECORRER UN ARRAY 
        
        AÑADIR ELEMENTOS A UN ARRAY 
        
        ORDENAR UN ARRAY
     -->
     
     <?php 
								//en un array se usa esa flecha para referenciar
		$datos = array("Nombre"=>"Juan","Apellido"=>"Gómez","Edad"=>21);
		//INTENTAR NO REPETIR LOS NOMBRES QUE PONES EN TUS VALORES DEL ARRAY PORQUE TE PUEDES PROVOCAR PROBLEMAS
		//POR SOBREESCRITURA 
		
		//echo	$datos["Nombre"];
		
		if(is_array($datos)){//esta función comprueba si es o no un array y te devuelve true si es y false si no es
			echo "Es un Array";
		}else{
			echo "Esto no es un Array";
			}
			
			
		echo "<br><br>----------------------------------------------------<br><br><br>";
		
		
		//vamos a recorrer un array
		$datos2 = array("Nombre"=>"Juan","Apellido"=>"Gómez","Edad"=>21);
		
		// ponemos el nombre del arreglo, y creamos una variable y lo referenciamos con otra variable para que tenga
			//su valor
		foreach($datos2 as $recorrido=>$valor){
			
			echo "A $recorrido le corresponde $valor<br>";	
		
		}
		echo "<br><br>----------------------------------------------------<br><br><br>";
		
		$semana[] = "Lunes";
		$semana[] = "Martes";
		$semana[] = "Miercoles";
		$semana[] = "Jueves";
		
		for($i=0;$i<count($semana);$i++){
			echo $semana[$i] . "<br>";
			}
		//agregamos un campo más al arreglo indexado	
		$semana[] = "Viernes";
		
		//recorremos el arreglo con la funcion count que nos devuelve cuantas filas hay en total
		for($i=0;$i<count($semana);$i++){
			echo $semana[$i] . "<br>";
			}
		
		
		echo "-------------------------------------------------<br><br><br>";
		
		$datos3 = array("Nombre"=>"Juan","Apellido"=>"Gómez","Edad"=>21);
		//agregamos un campo más al arreglo asociado
		$datos3["Pais"] = "Pais";
		//recorremos el arreglo
		foreach($datos3 as $recorrido2=>$valor2){
			echo "hemos agregado un valor mas $recorrido2 y su valor $valor2<br>";
		}
		
		echo "-------------------------------------------------<br><br><br>";
		
		$semana4=  array("Viernes", "Sabado", "Domingo");
		
		sort($semana4);//esta funcion sort hace que ordene de mayor a menor el arreglo
		
		for($i=0;$i<count($semana4);$i++){
				echo $semana4[$i] . "<br>";
			}
		
	 ?>
</body>
</html>