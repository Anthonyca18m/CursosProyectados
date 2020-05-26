const express = require('express');


const { countries } = require('countries-list');
const { info, error } = require('./modules/my-log');

const app = express();

app.get('/', (request, response) => {
  response.status(200).send('Hello World');
});

app.get('/info', (request, response) => {
  info('hola info xd');
  response.send('Info');
});

app.get('*', (request, response) => {
  response.status(404).send('Not found');
});

// var server = http.createServer(function (request, response) {
//   var parsed = url.parse(request.url);
//   console.log("parsed:", parsed);

//   var pathname = parsed.pathname;

//   var query = querystring.parse(parsed.query);
//   console.log("query", query);

//   if (pathname === "/") {
//     response.writeHead(200, { "Content-Type": "text/html" });
//     response.write("<html><body><p>HOME PAGE</p></body></html>");
//     response.end();
//   } else if (pathname === "/exit") {
//     response.writeHead(200, { "Content-Type": "text/html" });
//     response.write("<html><body><p>BYE</p></body></html>");
//     response.end();
//   } else if (pathname === "/country") {
//     response.writeHead(200, { "Content-Type": "application/json" });
//     response.write(JSON.stringify(countries[query.code]));
//     response.end();
//   } else if (pathname === "/info") {
//     var result = info(pathname);
//     response.writeHead(200, { "Content-Type": "text/html" });
//     response.write(result);
//     response.end();
//   } else if (pathname === "/error") {
//     var result = error(pathname);
//     response.writeHead(200, { "Content-Type": "text/html" });
//     response.write(result);
//     response.end();
//   } else {
//     response.writeHead(404, { "Content-Type": "text/html" });
//     response.write("<html><body><p>NOT FOUND</p></body></html>");
//     response.end();
//   }
// });

app.listen(4000);
console.log('running on 4000');
