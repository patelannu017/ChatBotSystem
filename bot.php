<?php

$message = strtolower(trim($_POST["message"]));

if ($message == "hi" || $message == "hello") {
    echo "👋 Hello! Welcome to AI ChatBot.";
}
elseif ($message == "how are you") {
    echo "😊 I am fine. How are you?";
}
elseif ($message == "what is your name") {
    echo "🤖 My name is AI ChatBot.";
}
elseif ($message == "who made you") {
    echo "💻 I was created using PHP, HTML, CSS and JavaScript.";
}
elseif ($message == "what can you do") {
    echo "✨ I can answer simple questions and chat with you.";
}
elseif ($message == "good morning") {
    echo "🌞 Good Morning! Have a great day.";
}
elseif ($message == "good afternoon") {
    echo "☀️ Good Afternoon!";
}
elseif ($message == "good evening") {
    echo "🌇 Good Evening!";
}
elseif ($message == "good night") {
    echo "🌙 Good Night! Sweet dreams.";
}
elseif ($message == "thank you") {
    echo "😊 You're welcome!";
}
elseif ($message == "bye") {
    echo "👋 Goodbye! Have a nice day.";
}
elseif ($message == "help") {
    echo "💡 Try asking: Hello, How are you, What is your name, Who made you, What can you do.";
}
else {
    echo "🤔 Sorry, I don't understand that yet.";
}

?>