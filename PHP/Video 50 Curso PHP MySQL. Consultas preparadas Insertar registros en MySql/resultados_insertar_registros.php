<?php 
		require_once("../conexion.php");

		$secc = $_GET['secc'];
		$n_art = $_GET['n_art'];
		$pre = $_GET['pre'];
		$fec = $_GET['fec'];
		$imp = $_GET['imp'];
		$p_ori = $_GET['p_ori'];


		$consulta = "INSERT INTO producto_clase43 (cod_art, seccion, nom_art, precio_art, fecha_art, importado_art, pais_art) VALUES (NULL,?,?,?,?,?,?)";
		
		$realizar = mysqli_prepare($Conexion, $consulta);
					// s = string , i = int , d = double ,....
		$pre_resultado = mysqli_stmt_bind_param($realizar, "isdsii", $secc, $n_art, $pre, $fec, $imp, $p_ori);

		$pre_resultado = mysqli_stmt_execute($realizar);

		if($pre_resultado == false){
			echo "Hay fallas";
		}else{
			echo "Agregado exitosamente!.";
		}
			
		mysqli_stmt_close($realizar);
?>