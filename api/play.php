<?php


require("phpMQTT.php");
require("connect.php");

$user= $_GET["UserID"];
$file= $_GET["FileID"];
$speaker= $_GET["SpeakerID"];

if ($mqtt->connect()) {
	$mqtt->publish($user,"play/".$file,0);
	$mqtt->close();
}
?>
