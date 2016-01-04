<?php

$id = $_GET["id"];

include"connect_to_mysql.php";

mysql_query("DELETE FROM students WHERE id = '$id'") or die(mysql_error());

Header("Location: list.php");
?>
