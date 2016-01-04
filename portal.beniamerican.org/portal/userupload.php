<?php
session_start();

$users = $_SESSION['profiles'];
$target_path = "members/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    

include"connect_to_mysql.php";

mysql_query("UPDATE mymembers SET userphoto='$target_path' WHERE username='$users'") 
or die(mysql_error());
mysql_close();

Header("Location: myprofile.php");

	
} else{
    echo "There was an error uploading the file, please try again!";
}

?>

