<?php


require("phpMQTT.php");
require("connect.php");

$user= $_GET["UserID"];

if ($mqtt->connect()) {
	$mqtt->publish($user,"stop",0);
	$mqtt->close();
}
?>
