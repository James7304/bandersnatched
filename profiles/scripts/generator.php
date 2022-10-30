<?php 

    include "../../global/scripts/connection.php";

    // find a match
    $findHorror = json_decode($_POST['data'], true)["horror"];
    $findFantasy = json_decode($_POST['data'], true)["fantasy"];
    $findTime = json_decode($_POST['data'], true)["time"];
    $findFamily = json_decode($_POST['data'], true)["family"];
    $findTopia = json_decode($_POST['data'], true)["topia"];

    function costFunction(int $found, int $target){
        // where $found is the value of the new show, and $target is the user preference
        $cost = pow($found - $target, 2);
        return $cost;
    }

    // find best show ID
    $best_show_ID = 0;
    $lowest_cost = 126;

    $sql = "SELECT `ID`, `horror`, `fantasy`, `time`, `family`, `topia` FROM shows";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)>0){
        while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $cost = 0;
            $sumFound = array_sum($row) - $row["ID"];
            $sumTarget = $findHorror + $findFantasy + $findTime + $findFamily + $findTopia;
            $cost = costFunction($sumFound, $sumTarget);
            /* $cost += costFunction($row["horror"], $findHorror);
            $cost += costFunction($row["fantasy"], $findFantasy);
            $cost += costFunction($row["time"], $findTime);
            $cost += costFunction($row["family"], $findFamily);
            $cost += costFunction($row["topia"], $findTopia); */
            if ($cost < $lowest_cost){
                $best_show_ID = $row["ID"];
                $lowest_cost = $cost;
                // break;
            }
        }
    }

    // Get all data for show ID
    $sql = "SELECT * FROM shows WHERE ID=".$best_show_ID;
    $result = mysqli_query($conn, $sql);
    $info = mysqli_fetch_array($result,MYSQLI_ASSOC);

    // send all data back
    echo implode("*",$info);
    
?>
