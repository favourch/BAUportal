<?php

session_start();

if(!isset($_SESSION['profiles'])){
Header("Location:../index.php");
}

if(isset($_SESSION['profiles'])){

$user = $_SESSION['profiles'];
include"connect_to_mysql.php";


$news = $_POST["news"];

mysql_query("INSERT INTO news (id, content) 
VALUES('', '$news') ") or die(mysql_error()); 
mysql_close();

header("Location: news.php");

}

?>