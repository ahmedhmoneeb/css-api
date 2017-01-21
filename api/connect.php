 <?php
$servername = "192.168.43.10";
$username = "root";
$password = "root";
$mysql_database = "CloudSoundSystem";
// Create connection
$conn =mysqli_connect($servername, $username, $password, $mysql_database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

$mqtt = new phpMQTT("192.168.43.10", 1883, "phpMQTT Pub Example");
?> 
