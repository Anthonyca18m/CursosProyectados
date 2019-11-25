<?php 

    include_once("Clase_1.php");

    // $stmt = $db->prepare("
    //     INSERT INTO user (name, pass) VALUES(?,?)
    // ");

    // $stmt->bindValue(1,"usaurio6");
    // $stmt->bindValue(2,"passwordasd");

    //INSERTAR
    // $stmt = $db->prepare("
    //     INSERT INTO user (name, pass) VALUES(:usuario, :password)
    // ");

    //ACTUALIZAR
    // $stmt = $db->prepare("
    //     UPDATE user SET name = :usuario, pass = :password WHERE id = 7
    // ");

    //ELIMINAR
    $stmt = $db->prepare("
        DELETE FROM user WHERE id = :codigo
    ");

    $stmt->bindValue(":codigo",7,PDO::PARAM_INT);

    $stmt->execute();

?>