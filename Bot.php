<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Mesajele Mele</title>

    <!--Css Files-->
    <link rel="stylesheet" href="assets/css/bot.css">

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="assets/images/paws.png">

    <!-- Google Fonts Link For Icons-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>

    <!--JavaScript Files-->
    <script src="assets/js/vendor/bot.js" defer></script>
</head>

<body>
    <button class="chatbot-toggler">
        <span class="material-symbols-outlined">mode_comment</span>
        <span class="material-symbols-outlined">close</span>
    </button>
        <div class="chatbot">
            <header>
                <h2>Mesajele Mele</h2>
                <span class=" close-btn material-symbols-outlined">close</span>
            </header>
            <ul class="chatbox">
                <li class="chat incoming">
                    <span class="material-symbols-outlined">smart_toy</span>
                    <p>Buna 👋🏻 <br> Cu ce te pot ajuta ?</p>
                </li>
            </ul>
            <div class="chat-input">
                <textarea placeholder="Introduceti un mesaj..." required></textarea>
                <span id="send-btn" class="material-symbols-outlined">send</span>
            </div>
        </div>




</body>
</html>