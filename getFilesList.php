<?php
require("connectDB.php");

$user_id = $_GET["user_id"];

$sql = "SELECT * FROM files WHERE userID = $user_id;";

$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    $files_names = array();
    $files_paths = array();
    $files_format = array();
    $files_album = array();
    $files_artist = array();
    $files_d_uploaded = array();
    $files_diuration = array();
    $files_size = array();
    $files_gener = array();
    $files_bit_rate = array();
    $files_rate = array();

    while ($row = $result->fetch_assoc())
    {
        $files_names[] = $row["Name"];
        $files_paths[] = $row["path"];
        $files_format[] = $row["format"];
        $files_album[] = $row["album"];
        $files_artist[] = $row["artist"];
        $files_d_uploaded[] = $row["d_uploaded"];
        $files_diuration[] = $row["diuration"];
        $files_size[] = $row["size"];
        $files_gener[] = $row["gener"];
        $files_bit_rate[] = $row["bit_rate"];
        $files_rate[] = $row["rate"];
    }

    $jsonData = array("files_names" => $files_names, "files_paths" => $files_paths, "files_format" => $files_format, "files_album" => $files_album, "files_artist" => $files_artist
                    , "files_d_uploaded" => $files_d_uploaded, "files_diuration" => $files_diuration, "files_size" => $files_size, "files_gener" => $files_gener, "files_bit_rate" => $files_bit_rate, "files_rate" => $files_rate);
    echo json_encode($jsonData);
}

$conn->close();
?>
