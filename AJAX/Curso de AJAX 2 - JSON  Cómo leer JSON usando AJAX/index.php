<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <button onclick="ajax_get_json()">MOSTRAR DATOS</button>
    <div id="info"></div>
</body>

</html>

<script type="text/javascript">
    var resultado = document.getElementById("info"); 

    function ajax_get_json() {

        var xmlHttp;

        if (window.XMLHttpRequest) {
            xmlHttp = new XMLHttpRequest();
        } else {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlHttp.onreadystatechange = function() {
            if (xmlHttp.readyState === 4 && xmlHttp.status === 200) { // si la peticion es finalizada y exitosa
                
                var datos = JSON.parse(xmlHttp.responseText); // convertimos a cadena el objeto JSON para poder mostralo

                if (resultado.innerHTML === "") { // comparamos si el div esta vacio para que no se repita cada vez que haga click
                    for (var i in datos) { // recorremos el json y asignamos el valos a resultado
                        resultado.innerHTML += i + ": " + datos[i] + "<br>";
                    }
                }
            }
        }

        xmlHttp.open("GET", "datos.json", true);
        xmlHttp.send();

    }
</script>