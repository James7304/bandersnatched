<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bandersnatched</title>

    <link href="../global/styles/main.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600" rel="stylesheet">

</head>
<body>

    <?php session_start(); ?>

    <div class="header">

        <h1>bandersnatch~ed</h1>
        
    </div>

    <div class="container">

        <div class="col">

            <div class="vid-container">
                <video id="vid-src" autoplay muted onclick="play()">
                    <source src="../global/videos/testvid.mp4" type="video/mp4" />
                </video>
                <div class="overlay">
                    <p><span id="name"></span>, <span id="age"></span></p>
                </div>
            </div>
            

            <div class="buttons">
                <button onclick="generate(true)">Yes</button>
                <button onclick="generate(false)">No</button>
            </div>
        </div>
        <div class="col">
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

    <script src="./profiles/scripts/main.js"></script>

</body>
</html>