<?php 

    include_once("Clase_1.php");

    $stmt = $db->query("SELECT * FROM user");

    while ($rs = $stmt->fetch(PDO::FETCH_ASSOC)) {
        var_dump($rs);
    }

?>