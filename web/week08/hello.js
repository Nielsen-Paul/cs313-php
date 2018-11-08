var http = require('http');
var exports = require('./exports.js');

var onRequest = (request, response) => {

    if (request.url == '/home') {
        response.writeHead(200, { "Content-Type": "text/html" });
        response.write("<h1>Hello World</h1>");
    } else if (request.url == '/getData') {
        response.writeHead(200, { "Content-Type": "application/json" });
        response.write('{"name":"Br. Burton","class":"cs313"}');
    } else if (request.url == '/exports') {
        response.writeHead(200, { "Content-Type": "text/html" });
        response.write(exports);
    } else {
        response.writeHead(404, { "Content-Type": "text/html" });
        response.write("<h1>Page Not Found</h1>");
    }
    response.end();
}

var server = http.createServer(onRequest);
server.listen(8888);