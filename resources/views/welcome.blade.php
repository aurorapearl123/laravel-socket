<!doctype html>
<html>
  <head>
    <title>Socket.IO chat</title>
    <style>
      * { margin: 0; padding: 0; box-sizing: border-box; }
      body { font: 13px Helvetica, Arial; }
      form { background: #000; padding: 3px; position: fixed; bottom: 0; width: 100%; }
      form input { border: 0; padding: 10px; width: 90%; margin-right: .5%; }
      form button { width: 9%; background: rgb(130, 224, 255); border: none; padding: 10px; }
      #messages { list-style-type: none; margin: 0; padding: 0; }
      #messages li { padding: 5px 10px; }
      #messages li:nth-child(odd) { background: #eee; }
      #messages { margin-bottom: 40px }
    </style>
  </head>
  <body>
    <ul id="messages"></ul>
    <form action="">
      <input id="m" autocomplete="off" /><button>Send</button>
    </form>
  <!--  <script src="{{ URL::asset('js/sockets.io.js') }}" type="text/javascript"></script> -->

   <!-- <script src="{{ asset('js/socket.io.js') }}"></script> -->
   <script src="https://cdn.socket.io/socket.io-1.3.4.js"></script> 
<script src="https://code.jquery.com/jquery-1.11.1.js"></script>
<script>
  $(function () {
    //var socket = io();
     //var socket = io('http://192.168.1.224:3000');
     //var socket = io.connect('http://192.168.1.224');
      var socket = io.connect('http://192.168.1.224:3000');
    socket.on('connect', function(){
      console.log("connectfdsfdsfdsf");
    });
    // $('form').submit(function(){
    //   var data = $('#m').val();
    //   // var data = {
    //   //   text: $('#m').val()
    //   // };
    //   console.log(data+" the data");
    //   socket.emit('chat message', {text: data});
    //   $('#m').val('');
    //   return false;
    // });
    // socket.on('chat message', function(msg){
    //   console.log(" on function me....");
    //   console.log("the result");
    //   console.log(msg);
    //   console.log(msg['message']['text']);
    //   $('#messages').append($('<li>').text(msg['message']['text']));
    // });
  });
</script>
  </body>
</html>
