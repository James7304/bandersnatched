<?php 

    include "../../global/scripts/connection.php";

    // find a match
    $findHorror = json_decode($_POST['data'], true)["horror"];
    $findFantasy = json_decode($_POST['data'], true)["fantasy"];
    $findTime = json_decode($_POST['data'], true)["time"];
    $findFamily = json_decode($_POST['data'], true)["family"];
    $findTopia = json_decode($_POST['data'], true)["topia"];

    function costFunction(int $found, int $target){
        // where $found is the value of the new show, and $factor is the user preference
        $cost = pow($found - $target, 2);
        return $cost;
    }

    $sql_num_of_shows = "SELECT * FROM shows";
    $result = mysqli_query($conn, $sql_num_of_shows);
    $total_shows = mysqli_num_rows($result);
     
    // Find best show ID
    $best_show_ID = 0;
    $lowest_cost = 126;
    for ($index=1; $index<=$total_shows; $index++){
        $sql = "SELECT `ID`, `horror`, `fantasy`, `time`, `family`, `topia` FROM shows WHERE `ID` = ".$index;
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        
        $cost = 0;
        $cost += costFunction($row["horror"], $findHorror);
        $cost += costFunction($row["fantasy"], $findFantasy);
        $cost += costFunction($row["time"], $findTime);
        $cost += costFunction($row["family"], $findFamily);
        $cost += costFunction($row["topia"], $findTopia);
        if ($cost < $lowest_cost){
            $lowest_cost = $cost;
            $best_show_ID = $row["ID"];
        }
    }

    // Get all data for show ID
    $sql = "SELECT * FROM shows WHERE ID =".$best_show_ID;
    $result = mysqli_query($conn, $sql);
    $info = mysqli_fetch_array($result,MYSQLI_ASSOC);

    // send all data back
    echo implode("*",$info);
?>
