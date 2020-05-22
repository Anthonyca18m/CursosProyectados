const http = require('http')

let manejador = function(request, response){
    console.log("Hello world")

    response.end("hello world")
}

let servidor = http.createServer(manejador)

servidor.listen(8080)