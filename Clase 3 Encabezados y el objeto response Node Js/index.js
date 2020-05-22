const http = require('http')

fs = require('fs')

http.createServer((req, res) => {
    fs.readFile('./index.html', (err, data) => {
        res.writeHead(200, {'Content-Type' : 'application json'})
        res.write(
            JSON.stringify({nombre : 'tom', username : 'tomsillo'})
            )
        res.end()
    })
}).listen(8080)