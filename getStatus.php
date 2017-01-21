<?php
require("connectDB.php");

$speakerID = $_GET["speaker_id"];

$sql = "SELECT state FROM speakers WHERE Speaker_ID = $speakerID;";

$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    $row = $result->fetch_assoc();
    if ( $row["state"] == 0)
        echo "off";
    if ( $row["state"] == 1)
        echo "on";
    if ( $row["state"] == 2)
        echo "disconnected";
}

$conn->close();
?>
