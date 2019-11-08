<?php 

    $personas = array("Ana", "Juan", "Anthony", 
                      "Jorge", "Antonio", "Josue", 
                      "Manuel", "Ricardo");

    $nombre = $_GET['nombre'];

    $sugerencia = "";

    if(!empty($nombre)){ // si es diferente a vacio
        $nombre = strtolower($nombre); // convierte a minuscula
        $cantCaracteres = strlen($nombre); //devuelve el largo de la cadena

        foreach ($personas as $rs) { // recorremos el array
            
            $nom_servidor = substr($rs, 0, $cantCaracteres); // igualamos la extración del array letra por letra
        
            if (stristr($nombre, $nom_servidor)) { // desde 0 hasta el ultimo
                if($sugerencia === ""){ // si esta vacio
                    $sugerencia = $rs; //devuelve cadena
                }else{
                    $sugerencia .= ", $rs"; //sino devuelve lo que encontro concatenada las referencias
                }
            }    
        }
    }

    echo $sugerencia === "" ? "No fue encontrado": $sugerencia;
?>