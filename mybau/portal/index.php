<?php

session_start();

if(isset($_SESSION['profiles'])){
Header("Location:profile.php");
}
else

{
Header("Location:../index.php");
}

?>