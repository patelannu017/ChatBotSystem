<!DOCTYPE html>
<html>
<head>
    <title>AI ChatBot</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="chat-container">
    <h2>🤖 AI ChatBot</h2>

    <div id="chat-box">
        <div class="bot">
            👋 Hello! I am your ChatBot.<br>
            Ask me something!
        </div>
    </div>

    <input type="text" id="userInput" placeholder="Type your message...">
    <button onclick="sendMessage()">Send</button>
    <button onclick="clearChat()">Clear</button>
</div>

<script>

function sendMessage(){

    var input=document.getElementById("userInput");

    var message=input.value.trim();

    if(message==""){
        return;
    }

    var chat=document.getElementById("chat-box");

    chat.innerHTML += "<div class='user'>"+message+"</div>";

    var xhr=new XMLHttpRequest();

    xhr.open("POST","bot.php",true);

    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");

    xhr.onload=function(){

        chat.innerHTML += "<div class='bot'>"+this.responseText+"</div>";

        chat.scrollTop=chat.scrollHeight;
    }

    xhr.send("message="+encodeURIComponent(message));

    input.value="";
}

function clearChat(){

    document.getElementById("chat-box").innerHTML =
    "<div class='bot'>👋 Hello! I am your ChatBot.<br>Ask me something!</div>";
}

document.getElementById("userInput").addEventListener("keypress",function(e){

    if(e.key==="Enter"){
        sendMessage();
    }

});

</script>

</body>
</html>