<?php

session_start();

if(!isset($_SESSION['profiles'])){
Header("Location:../index.php");
}

if(isset($_SESSION['profiles'])){

$user = $_SESSION['profiles'];
include"connect_to_mysql.php";


$id = $_POST["id"];
$course1 = $_POST["course1"];
$course2 = $_POST["course2"];
$course3 = $_POST["course3"];
$course4 = $_POST["course4"];
$course5 = $_POST["course5"];


mysql_query("INSERT INTO issued (student, course1, course2, course3, course4, course5) VALUES
            ('$id','$course1','$course2','$course3','$course4','$course5')") or die(mysql_error()); 

mysql_close();

header("Location: issue.php");

}

?>