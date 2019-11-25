<?php 

    include_once("Clase_1.php");

    $stmt = $db->query("SELECT * FROM user");

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $rs) {
        echo htmlentities($rs["id"]);
    }

?>