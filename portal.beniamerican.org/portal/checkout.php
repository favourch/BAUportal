<?php

session_start();
unset($_SESSION['profiles']);

Header("Location:../index.php");
?>

