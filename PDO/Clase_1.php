<?php 



    try {
        		    	//host         database                username  password   
        $db = new PDO('mysql:host=localhost;dbname=inmedia;charset=utf8' , 'root', '');
        
        //var_dump($db);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
