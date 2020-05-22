const http = require('http')
    fs = require('fs')


// let html = fs.readFileSync('./index.html')




http.createServer((req, res) => {
    
    fs.readFile('./index.html', (err, html) => {
        res.write(html)
        res.end()
    })
    
}).listen(8080)