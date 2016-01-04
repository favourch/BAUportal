<?php

$user = $_POST["adminuser"];
$pass = $_POST["password"];
?>
<?php
include"connect_to_mysql.php";

$result = mysql_query("SELECT id FROM admin WHERE id='$user'") or die(mysql_error()); 

if(mysql_num_rows($result) > 0)
{
 $results = mysql_query("SELECT * FROM admin WHERE id='$user'") or die(mysql_error());
 
 while($row = mysql_fetch_array($results)){

	$pass1 = $row['password'];
	
	if($pass1 == $pass)
	
	   {
	   session_start();
       // store session data
       $_SESSION['profiles']= $user;
	   
	   mysql_close();
	   Header("Location:profile.php");
	   }
	   
	else
	{
	
	Header("Location:index.php:");
	mysql_close();
	
	}
 } 
}
else{

Header("Location:index.php:");
mysql_close();

} 


?>

