<?php
include_once 'connectDB.php';

if(isset($_POST['submit']))
{    
     
 $fileName = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $fileSize = $_FILES['file']['size'];
 $fileFormat = $_FILES['file']['type'];
 $folder="uploads/";
 
 // make file name in lower case
 $new_file_name = strtolower($file);

 $fileName=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $sql="INSERT INTO files(Name,format,size) VALUES('$fileName','$fileFormat','$fileSize')";
    $result = $conn->query($sql);
    echo $result;
     echo"uploaded";
 }
}
?>
