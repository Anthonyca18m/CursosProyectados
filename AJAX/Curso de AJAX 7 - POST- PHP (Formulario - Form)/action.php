<?php 

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];

    if(empty($nombre) || empty($apellido)){
        echo "Ingresar datos nombre y apellido";
    }else{
        echo $nombre . ", " . $apellido;
    }
?>