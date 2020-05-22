const http = require('http')
fs = require('fs')

http.createServer((req, res) => {
    
    fs.readFile('./index.html', (err, data) => {

        let html_string = data.toString()


        //expresión regular => este patron busca { variable } entre llaves
        let variables = html_string.match(/[^\{\}]+(?=\})/g)
        
        let name = 'Tomsillo'

        for (let i = 0; i < variables.length; i++) {
            //Ejecutamos como código js para obtener el obtener el valor de la variable
            let value = eval(variables[i])
            //Reemplazamos el {varaible} con su valor 
            html_string = html_string.replace("{"+variables[i]+ "}", value)

        }

        res.writeHead(200, {'Content-Type' : 'text/html'})
        res.write(html_string)
        res.end()
    })
}).listen(8080)