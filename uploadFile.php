<?php
include_once 'connectDB.php';

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = true;
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        //echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    //echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size < 15MB
if ($_FILES["fileToUpload"]["size"] > 15728640) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

/**
// Allow certain file formats
if($imageFileType != "mp3" && $imageFileType != "wav" && $imageFileType != "ogg"
&& $imageFileType != "aac" && $imageFileType != "3gp" ) {
    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
**/

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    //echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            $fileName = $_FILES["fileToUpload"]["name"];
            $fileType = $_FILES["fileToUpload"]["type"];
            $fileSize = $_FILES["fileToUpload"]["size"];
          $sql="INSERT INTO files(userID,Name,format,size) VALUES(1,'$fileName','$fileType','$fileSize')";
                $result = $conn->query($sql);
        header('Location: ' . $_SERVER['HTTP_REFERER']);

    } else {
        //echo "Sorry, there was an error uploading your file.";
    }
}
?>
