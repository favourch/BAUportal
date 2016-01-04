<?php
session_start();

$users = $_SESSION['profiles'];
$target_path = "uploads/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    
$com = $_POST["comments"];

include"connect_to_mysql.php";

mysql_query("INSERT INTO activity(id, comments, photo, member) 
VALUES('', '$com', '$target_path', '$users') ") 
or die(mysql_error());
mysql_close();

Header("Location: myprofile.php");

	
} else{
    echo "There was an error uploading the file, please try again!";
}

?>

