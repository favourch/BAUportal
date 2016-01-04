<?php

session_start();

if(!isset($_SESSION['profiles'])){
Header("Location:../index.php");
}

if(isset($_SESSION['profiles'])){

$user = $_SESSION['profiles'];
include"connect_to_mysql.php";


$address = $_POST["address"];
$phone = $_POST["phone"];

mysql_query("UPDATE students SET address='$address', phone='$phone' WHERE id='$user'") or die(mysql_error()); 

mysql_close();

header("Location: profile.php");

}

?>