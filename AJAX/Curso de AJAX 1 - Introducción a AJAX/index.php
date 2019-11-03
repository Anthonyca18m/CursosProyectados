<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso AJAX</title>
</head>

<body>

    <button onclick="ejecutarAJAX()">HAZME CLICK</button>

    <div id="info"></div>

</body>

</html>

<script type="text/javascript">
    function ejecutarAJAX() {

        // esta funcion sirve para saber si estamos usando un explorador moderno
        //  var ajaxRequest;
        //  if (window.XMLHttpRequest) {
        //      ajaxRequest = new XMLHttpRequest();
        //  }else{
        //      ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
        //  }


        var ajaxRequest = new XMLHttpRequest();

        // readyState devuelve el resultado de la peticion 
        // 0 Peticion no ha sido inicializada
        // 1 Peticion ha sido inicializada
        // 2 Peticion ha sido enviada
        // 3 Peticion esta siendo procesada
        // 4 Peticion ha sido finalizado

        ajaxRequest.onreadystatechange = function() {
            if (ajaxRequest.readyState == 4 && ajaxRequest.status == 200) { // significa si la peticón esta OK 
                document.getElementById("info").innerHTML = ajaxRequest.responseText;
            }
        }

        // con esto se vuelve una petición asincrona
        // primer parametro es el tipo de metodo que usaremos ya sea GET | POST 
        // segundo parametro la dirección el API o servidor
        // tercero es true o false
        ajaxRequest.open("GET", "documentation.txt", true);
        ajaxRequest.send();
    }
</script>