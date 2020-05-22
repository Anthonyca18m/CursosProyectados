const http = require('http')
fs = require('fs')

http.createServer((req, res) => {
    
    fs.readFile('./index.html', (err, data) => {

        // if(req.url.indexOf("favicon.ico")){return ;}

        console.log("============\n\n")

        let html_string = data.toString()

        //expresión regular => este patron busca { variable } entre llaves
        let variables = html_string.match(/[^\{\}]+(?=\})/g)
        let name = ''
        let arr_param = []
        let params = {}

        if (req.url.indexOf("?") > 0) {
            // "/?name=asdasd"
            let url_data = req.url.split("?")
            let arr_param = url_data[1].split("&")
        }

        for (let i = 0; i < arr_param.length; i++) {
            let param = arr_param[i]
            let param_data = param.split("=")
            params[param_data[0]] = param_data[1]
            
        }

        for (let i = 0; i < variables.length; i++) {
            let value = eval(variables[i])
            html_string = html_string.replace("{"+variables[i]+ "}", params[variables[i]])
        }

        res.writeHead(200, {'Content-Type' : 'text/html'})
        res.write(html_string)
        res.end()
    })
}).listen(8080)