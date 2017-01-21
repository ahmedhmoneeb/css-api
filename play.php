<?php
require("phpMQTT.php");
require("connectMQTT.php");

$file= $_GET["FileName"];
$speaker= $_GET["SpeakerID"];

if ($mqtt->connect()) {
	$mqtt->publish($speaker,"play/".$file,0);
	$mqtt->close();
}
?>
