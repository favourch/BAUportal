<?php

session_start();
unset($_SESSION['accounting']);

Header("Location:../index.php");
?>

