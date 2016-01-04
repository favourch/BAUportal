<?php

session_start();

if(!isset($_SESSION['profiles'])){
Header("Location:../index.php");
}

if(isset($_SESSION['profiles'])){

$user = $_SESSION['profiles'];
include"connect_to_mysql.php";


$id = $_POST["id"];
$password = $_POST["password"];
$first = $_POST["first"];
$middle = $_POST["middle"];
$last = $_POST["last"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$address = $_POST["address"];
$phone = $_POST["phone"];
$faculty = $_POST["faculty"];
$department = $_POST["department"];
$program = $_POST["program"];
$advisor = $_POST["advisor"];
$doc4 = $_POST["doc4"];
$doc5 = $_POST["doc5"];
$doc3 = $_POST["doc3"];
$doc2 = $_POST["doc2"];
$doc1 = $_POST["doc1"];
$kinname = $_POST["kinname"];
$kinnum = $_POST["kinnum"];
$email = $_POST["email"];
$join= $_POST["join"];
$semester= $_POST["semester"];

// File Upload Codes


  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "../portal/images/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "../portal/images/" . $_FILES["file"]["name"];
      }
    }
	

mysql_query("UPDATE students SET password='$password', first='$first', middle='$middle', last='$last', dob='$dob', gender='$gender', address='$address', 
phone='$phone', faculty='$faculty', department='$department', program='$program', advisor='$advisor', doc4='$doc4', doc5='$doc5', doc3='$doc3', doc2='$doc2',
doc1='$doc1', kinname='$kinname', kinnum='$kinnum', email='$email', joinyear='$join', semester='$semester', officer='$user' WHERE id='$id'") or die(mysql_error()); 

mysql_close();

$extra = 'view.php?s='.$id.'';
header("Location: $extra");

}

?>