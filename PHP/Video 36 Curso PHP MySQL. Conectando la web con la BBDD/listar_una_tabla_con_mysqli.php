<?php 
	

	//incluimos el archivo de nuestra conexión para no tener que repetir el mismo código varias veces en los archivos donde utilizarás conexiones.
	include("conexion.php");

	$consulta = "SELECT * FROM user";

	$registros = mysqli_query($Conexion, $consulta);

	/*
	$fila = mysqli_fetch_row($registros);

	echo $fila[0];
	echo $fila[1];
	echo $fila[2];
	echo $fila[3];
	
	//este te listará de la tu base de datos pero no es la recomendada o por asi decirlo la más usada 

			FORMA RECOMENDADA ES LA SIGUIENTE Y EN TODO TRABAJO LO VERÁS: 
							|      |    |        |          |
							|      |    |        |          |
							U      U    U        U          U
	*/mysqli_set_charset($Conexion, "utf8");

		while ($resultado = mysqli_fetch_array($registros)) {
								
			$id_usuario = $resultado['id'];
			$nombre_usuario = $resultado['Nombre'];
			$apellido_usuario = $resultado['Apellido'];
			$direccion_usuario = $resultado['Direccion'];

			echo "$id_usuario, $nombre_usuario, $apellido_usuario, $direccion_usuario<br>";
		}

		mysqli_close($Conexion);//cerrar conexión para optimizar recursos	

		/*ESTÁ ES LA FORMA MÁS RECOMENDADA DE LISTAR DATOS DE UNA DB
		  BASADO EN UNA FUNCIÓN WHILE QUE CREAMOS UN ARREGLO ASOCIADO
		  PARA DAR COMO VALOR LOS REGISTROS QUE LISTARÁ DE LA BASE DE DATOS
		  Y LO ASIGNAMOS A UNA VARIABLE CUALQUIERA CON EL ARREGLO ASOCIADO Y EL NOMBRE TAL CUAL ESTÁ DE LA BASE DE DATOS, NO LO ENTENDISTE A BAJO EL EJEMPLO:

		  TU BASE DE DATOS TIENE UNA TABLA USUARIOS Y SUS ATRIBUTOS TIENE
		  	
		  	ID_USUARIO INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
		  	NOMBRE VARCHAR(255);
			-------------------------------------------------

			$NOMBRE_CUALQUIERA= $resultado['ID_USUARIO'];
			

			MÁS CLARO NO PUEDE ESTAR!.

		*/					
?>