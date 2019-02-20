//http://localhost/payment/resources/views/welcome.blade.php

var app = require("express")();
var http = require("http").Server(app);
var io = require("socket.io")(http);

app.get("/", function(req, res) {
    console.log("this is the get file");
    res.sendFile(__dirname + "/resources/views/welcome.blade.php");
});

io.on("connection", function(socket) {
    console.log("one user connected the id: " + socket.id);
});

http.listen(3000, function() {
    console.log("the path ", __dirname);
    console.log("listening on the *:3000");
});

// io.on('connection', function(socket){
//   socket.on('chat message', function(msg){
//     console.log('message: ' + msg);
//   });
// });

//emit function
io.on("connection", function(socket) {
    socket.on("chat message", function(data) {
        //var sockets = io.sockets.sockets;
        // sockets.forEach(function(sock){
        //     if(sock.id != socket.id)
        //     {
        //         sock.emit('message',data);
        //     }
        // })
        socket.broadcast.emit("chat message", { message: data });
        console.log(data);
        //var msgs = JSON.string(data);
        //console.log("the message ", msgs);
    });
    socket.on("disconnect", function() {
        console.log("one user disconnected " + socket.id);
    });
    // socket.on('chat message', function(msg){
    //    io.emit('chat message', {message: msg});
    //     console.log("message: "+ msg);
    //    var socketME = io.sockets.clients();
    //    socketME.forEach(function(sock){
    //       if(sock.id != socket.id) {
    //         sock.emit("chat message", {message: msg});
    //       }
    //    });
    // });
});
