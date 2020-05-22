// modulos de core
const http = require("http")
const fs = require("fs")
// modulos locales
const log = require("./modules/my-log")




const server = http.createServer((req, res) => {

    res.writeHead(200, {"Content-Type":"text/html"} )

    switch (req.url) {
        case "/":
            res.write("<h1>Hello World<h1>")
            break;
        case "/home":
            log.info("una app con Nodejs")
            res.write(req.url)
            break;
    }

    res.end()
}).listen(8080)