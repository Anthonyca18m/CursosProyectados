<?php 

    include_once("Clase_1.php");

    foreach ($db->query("SELECT * FROM tbl_images") as $rs)  {
        echo "<br>" . htmlentities($rs["id"]) . "<br>";
    }

    // el htmlentities() funciona para convertir lo que viene de la db a formato html

?>