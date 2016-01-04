<?php

session_start();

if(isset($_SESSION['accounting'])){
include"connect_to_mysql.php";

$student = $_POST["sid"];
$amount = $_POST["amount"];
$type = $_POST["type"];
$part = $_POST["part"];
$description = $_POST["description"];
$officer = $_SESSION['accounting'];


mysql_query("INSERT INTO transactions (tid, amount, type, part, description, sid, officer) 
VALUES('', '$amount', '$type', '$part', '$description', '$student', '$officer') ") or die(mysql_error()); 



$result1 = mysql_query("SELECT id FROM accounts WHERE id='$student'") or die(mysql_error()); 

if(mysql_num_rows($result1) > 0)
{
if($type=='Deposit') {
mysql_query("UPDATE accounts SET total = total + $amount WHERE id = '$student'") or die(mysql_error()); 
}

if($type=='Withdrawal') {
mysql_query("UPDATE accounts SET total = total - $amount WHERE id = '$student'") or die(mysql_error());  
}
}

$result1 = mysql_query("SELECT id FROM accounts WHERE id='$student'") or die(mysql_error()); 
if(mysql_num_rows($result1) == 0)
{
mysql_query("INSERT INTO accounts (id, total, balance) 
VALUES('$student', '$amount', 0) ") or die(mysql_error()); 
}

Header("Location: profile.php");
}
if(!isset($_SESSION['accounting'])){

Header("Location:../index.php");
}
?>
