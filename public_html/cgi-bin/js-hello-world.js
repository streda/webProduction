#!/usr/bin/node

console.log("Cache-Control: no-cache\n");
console.log("Content-type: text/html\n\n");
console.log("<html>");
console.log("<head>");
console.log("<title>Hello, JavaScript!</title>");
console.log("</head>");
console.log("<body>");

console.log("<h1>Thomas was here - Hello, JavaScript!</h1>");
console.log("<p>This page was generated with the JavaScript programming langauge</p>");

const date = Date.now();
console.log(`<p>Current Time: ${date}</p>`);

// IP Address is an environment variable when using CGI
const address = process.env.REMOTE_ADDR;
console.log(`<p>Your IP Address: ${address}</p>`);

console.log("</body>");
console.log("</html>");