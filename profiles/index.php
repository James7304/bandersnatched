<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bandersnatched</title>

    <link href="../global/styles/main.css" rel="stylesheet">
    <link rel="icon" href="../global/imgs/logo.png">

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600" rel="stylesheet">

</head>
<body>

    <div class="header">

        <h1>bandersnatch~ed</h1>
        
    </div>

    <div class="container">

        <div class="col-main">

            <div class="vid-container">
                <video id="vid-src" autoplay muted onclick="play()">
                    <source src="" type="video/mp4" />
                </video>
                <div class="overlay">
                    <p><span id="name"></span>, <span id="age"></span></p>
                </div>
            </div>
            

            <div class="buttons">

                <div class="spin hide" id="spinner"></div>

                <button onclick="generate(true)"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="25" style="position:relative;top:3px;"><path fill="var(--primary-text)" d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg></button>
                <button onclick="generate(false)"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" height="25" style="position:relative;top:3px;"><path fill="var(--primary-text)" d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"/></svg></button>
            </div>
        </div>
        <div class="col-bubble">
            <div class="bubble" id="bio">

                <h2>Bio</h2>
                <p id="bio-p"></p>

            </div>
            <div class="bubble" id="date">

                <h2>Ideal Date</h2>
                <p id="date-p"></p>

            </div>
            <div class="bubble" id="quirks">

                <h2>Quirks</h2>
                <p id="quirks-p"></p>
                
            </div>
            <div class="bubble" id="kinks">

                <h2>Kinks</h2>
                <p id="kinks-p"></p>

            </div>
        </div>

    </div>

    <script src="./scripts/main.js"></script>

</body>
</html>