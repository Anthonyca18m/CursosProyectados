<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
	<!--
    	¿Qué son los arrays?
        	Es un espacio en la memoria del ordenador donde podemos almacenar varios valores a la misma ves.
        Tipos de arrays en PPH
        	*ARRAYS INDEXADOS( o array lineal)
            	$ejemploarr[];
            *ARRAYS ASOCIATIVOS
            	utilizamos en ves de indices usamos nombres a las posiciones(se les dice nombres asociativos)
                $ejemploarr["valor2"];
        ver los valores almacenados en un Array
    
     -->
     
     <?php 
	  	$semana[] = "Lunes";		//0
		$semana[] = "Martes";		//1
		$semana[] = "Miercoles";	//2
		//PHP permite no tener que poner indice o siquieres lo pones, pero igual ya PHP lo entiende como si fuera 0,1,2
		
		echo $semana[0];
		echo "---------------------------------------------------- <br><br><br>";
		//OTRA SINTAXIS
		
		$semana2 = array("Lunes","Martes","Miercoles","Jueves","Viernes");
		
		echo $semana2[3];
		
		echo "---------------------------------------------------- <br><br><br>";
								//en un array se usa esa flecha para referenciar
		$datos = array("Nombre"=>"Juan","Apellido"=>"Gómez","Edad"=>21);
		//INTENTAR NO REPETIR LOS NOMBRES QUE PONES EN TUS VALORES DEL ARRAY PORQUE TE PUEDES PROVOCAR PROBLEMAS
		//POR DUPLICIDAD DE VARIABLE 
		
		echo	$datos["Nombre"];
	 ?>
</body>
</html>