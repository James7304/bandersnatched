<?php 
    session_start();


    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $findHorror = $_POST["horror"];
        $findFantasy = $_POST["fantasy"];
        $findTime = $_POST["time"];
        $findFamily = $_POST["family"];
        $findTopia = $_POST["topia"];
    }
?>
