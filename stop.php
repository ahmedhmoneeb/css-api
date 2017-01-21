<?php
require("phpMQTT.php");
require("connectMQTT.php");

$speaker= $_GET["SpeakerID"];

if ($mqtt->connect()) {
	$mqtt->publish($speaker,"stop",0);
	$mqtt->close();
}
?>
