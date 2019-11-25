<?php 

    include_once("Clase_1.php");

    // $stmt = $db->prepare("SELECT * FROM user WHERE name = ?");

    // $stmt->bindValue(1,'usuario5');
    // $stmt->execute();

    //por letra donde este
    // $stmt = $db->prepare("SELECT * FROM user WHERE name LIKE ?");

    // $stmt->bindValue(1,'%a%');
    // $stmt->execute();

    $stmt = $db->prepare("SELECT * FROM user WHERE id = ? AND name = ?");

    $id= 5;
    $nombre = "usuario5";
    
    // $stmt->bindValue(1,$id);
    // $stmt->bindValue(2,$nombre);
    $stmt->bindParam(1, $id);
    /*
    no acepta cambios antes del execute(),
    quiere decir que si a = 1 y cambias despues a a=2 antes
    de poner el execute() el valor permanecera en a =1  */
    $stmt->bindParam(2, $nombre);
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