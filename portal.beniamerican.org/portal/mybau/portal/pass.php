<?php

session_start();

if(isset($_SESSION['profiles'])){
$user = $_SESSION['profiles'];

$passes1 = $_POST["passes"];
$password = $_POST["password"];
$passes = $_POST["passes1"];


include"connect_to_mysql.php";
$results = mysql_query("SELECT * FROM students WHERE id='$user'") or die(mysql_error());
 
 while($row = mysql_fetch_array($results)){

	$pass = $row['password'];
	
	}
	
if($pass == $password)
   {
      if($passes == $passes1)
	     {
		 $result = mysql_query("UPDATE students SET password='$passes' WHERE id='$user'") or die(mysql_error());
		 mysql_close();
		 echo 'Password Change was SUCCESSFUL<br />';
         echo '<a href="profile.php">Click Here to Return</a>';
         echo '<br />';
		 }
	  else
	     {
		 echo 'ERROR! New Password does not match<br />';
         echo '<a href="password.php">Click To Go Back</a>';
         echo '<br />';
		 }   
   
   }
else 
   {
    echo 'ERROR! Old Password is not correct!<br />';
    echo '<a href="password.php">Click To Go Back</a>';
    echo '<br />';
   
   }

}

else
{

Header("Location:../index.php");
}
 ?>