<?php
require("connectDB.php");

$speakerID = $_GET["speaker_id"];
$state = $_GET["state"];

if ($state == "on") $state = 1;
if ($state == "off") $state = 0;

$sql = "UPDATE speakers SET state = '$state' WHERE Speaker_ID = $speakerID;";

$result = $conn->query($sql);

if($result) echo "done";

$conn->close();
?>
