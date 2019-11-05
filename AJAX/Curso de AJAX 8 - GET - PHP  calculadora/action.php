<?php 

    $num1 = $_GET["numuno"];
    $num2 = $_GET["numdos"];

    if(empty($num1) || empty($num2)){
        echo "Ingresar datos";
    }else if(!ctype_digit($num1) || !ctype_digit($num2)){ // validando que no sean caracteres y solamente números
        echo "por favor ingrese números y no caracteres";
    }else{
        echo "$num1 + $num2 = " . ($num1 + $num2) . "<br>";
        echo "$num1 - $num2 = " . ($num1 - $num2) . "<br>";
        echo "$num1 * $num2 = " . ($num1 * $num2) . "<br>";
        echo "$num1 / $num2 = " . ($num1 / $num2) . "<br>";
    }
?>