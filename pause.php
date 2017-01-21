<?php
require("phpMQTT.php");
require("connectMQTT.php");

$speaker= $_GET[SpeakerID];

if ($mqtt->connect()) {
	$mqtt->publish($speaker,"pause",0);
	$mqtt->close();
}
?>
