// modulos de core
const http = require("http")
const fs = require("fs")
const countries = require("countries-list")

// modulos locales
const log = require("./modules/my-log")

const server = http.createServer((req, res) => {

    switch (req.url) {
        case "/":
            res.writeHead(200, {"Content-Type":"text/html"} )
            res.write("<h1>Hello World<h1>")
            break;
        case "/countries":
            res.writeHead(200, {"Content-Type":"application/json"} )
            log.info("una app con Nodejs")
            res.write(JSON.stringify(countries.countries.PR))
            break;
        case "/home":
            res.writeHead(200, {"Content-Type":"text/html"} )
            log.info("una app con Nodejs")
            res.write(req.url)
            break;
    }

    res.end()
}).listen(8080)