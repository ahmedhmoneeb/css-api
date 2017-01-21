<?php


require("phpMQTT.php");
require("connect.php");

$user= $_GET["UserID"];
$seek_time= $_GET["SeekTime"];
$seek_type= $_GET["SeekType"];


if ($mqtt->connect()) {
	$mqtt->publish($user,"seek/".$seek_time."/".$seek_type,0);
	$mqtt->close();
}
?>
