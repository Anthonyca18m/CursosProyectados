<?php 

    include_once("Clase_1.php");

    $stmt = $db->prepare("SELECT * FROM user WHERE id = :codigo AND name = :nombre");

    $id= 5;
    $nombre = "usuario5";
    
    // $stmt->bindValue(1,$id);
    // $stmt->bindValue(2,$nombre);
    $stmt->bindValue(':codigo', $id,PDO::PARAM_INT);
    /*
    no acepta cambios antes del execute(),
    quiere decir que si a = 1 y cambias despues a a=2 antes
    de poner el execute() el valor permanecera en a =1  */
    $stmt->bindValue(':nombre', $nombre,PDO::PARAM_STR);
    /*puede aceptar cambios de valor del parametro
    antes del execute() */
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $rs) {
        echo htmlentities($rs["id"]) . " || ";
        echo htmlentities($rs["name"]) . " || ";
        echo htmlentities($rs["pass"]) . "<br>";
    }

?>