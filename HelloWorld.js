const http = require("http")

const server = http.createServer((req, res) => {

    res.writeHead(200, {"Content-Type":"text/html"} )

    switch (req.url) {
        case "/":
            res.write("<h1>Hello World<h1>")
            break;
        case "/home":
            res.write("<h1>Home<h1>")
            break;
    }

    res.end()
}).listen(8080)