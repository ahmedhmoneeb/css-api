<?php


require("phpMQTT.php");
require("connect.php");

$user= $_GET[UserID];


 //Change client name to something unique

if ($mqtt->connect()) {
	$mqtt->publish($user,"pause",0);
	$mqtt->close();
}
?>
