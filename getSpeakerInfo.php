<?php
require("connectDB.php");

$speaker_id = $_GET["speaker_id"];

$sql = "SELECT * FROM speakers WHERE Speaker_ID = $speaker_id;";

$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    
    $row = $result->fetch_assoc();
    
    $speaker_name = $row["Name"];
    $speaker_country = $row["country"];
    $speaker_city = $row["city"];
    $speaker_location = $row["location"];
    $speaker_ip = $row["IP"];
    $speaker_volume = $row["volume"];
    $speaker_state = $row["state"];

    $jsonData = array("speaker_name" => $speaker_name, "speaker_country" => $speaker_country, "speaker_city" => $speaker_city, "speaker_location" => $speaker_location
                        , "speaker_ip" => $speaker_ip, "speaker_volume" => $speaker_volume, "speaker_state" => $speaker_state);
    echo json_encode($jsonData);
}

$conn->close();
?>

