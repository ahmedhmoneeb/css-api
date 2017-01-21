<?php

require("../phpMQTT.php");

  $host = "192.168.1.11"; 
  $port = 1883;
  $username = "testPHP";

  //MQTT client id to use for the device. "" will generate a client id automatically
  $mqtt = new phpMQTT($host, $port, "ClientID".rand()); 


if(!$mqtt->connect()){
	exit(1);
}

$topics['moneeb'] = array("qos"=>0, "function"=>"procmsg");
$mqtt->subscribe($topics,0);

while($mqtt->proc()){
		
}


$mqtt->close();

function procmsg($topic,$msg){
		echo "Msg Recieved: ".date("r")."\nTopic:{$topic}\n$msg\n";
}
	


?>
