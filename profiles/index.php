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

            <video autoplay muted>
                <source src="../global/videos/testvid.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <div class="buttons">
                <button onclick="generate(true)">Yes</button>
                <button onclick="generate(false)">No</button>
            </div>
        </div>
        <div class="col">
            <div class="bubble">
                
            </div>
            <div class="bubble">

            </div>
            <div class="bubble">

            </div>
            <div class="bubble">

            </div>
        </div>

    </div>

    <script src="./profiles/scripts/main.js"></script>

</body>
</html>