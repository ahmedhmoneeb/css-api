<?php
require("phpMQTT.php");
require("connectMQTT.php");

$speaker= $_GET["SpeakerID"];
$seek_time= $_GET["SeekTime"];
$seek_type= $_GET["SeekType"];


if ($mqtt->connect()) {
	$mqtt->publish($speaker,"seek/".$seek_time."/".$seek_type,0);
	$mqtt->close();
}
?>
