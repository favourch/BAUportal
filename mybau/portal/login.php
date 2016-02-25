<?php
session_start();
// store session data

$user = $_POST["studentid"];
$pass = $_POST["password"];
?>
<?php
include "connect_to_mysql.php";

$result = mysql_query("SELECT id FROM students WHERE id='$user'") or die(mysql_error()); 

if(mysql_num_rows($result) > 0)
{
 $results = mysql_query("SELECT * FROM students WHERE id='$user'") or die(mysql_error());
 
 while($row = mysql_fetch_array($results)){

	$pass1 = $row['password'];
	
	if($pass1 == $pass)
	
	   {
	   
       
       $_SESSION['profiles']= $user;
	   
	   mysql_close();
	   //Header("Location:profile.php");
	   Header("Location:sidebar.php");
	   }
	   
	else
	{
	Header("Location:../index.php");
	mysql_close();
	
	}
 } 
}
//username matches but password doesnt search in accounts portal
else
{
	$result = mysql_query("SELECT id FROM accs WHERE id='$user'") or die(mysql_error()); 

	if(mysql_num_rows($result) > 0)
	{
	 $results = mysql_query("SELECT * FROM accs WHERE id='$user'") or die(mysql_error());
	 
	 while($row = mysql_fetch_array($results)){

		$pass1 = $row['password'];
		
		if($pass1 == $pass)
		
		   {
		   session_start();
	       // store session data
	       $_SESSION['accounting']= $user;
		   
		   mysql_close();
		   Header("Location:../accounts/profile.php");
		   }
		   
		else
		{
		
		Header("Location:index.php:");
		mysql_close();
		
		}
	 } 
	}
	//username matches but password doesnt search in admin portal
	else{
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
			   Header("Location:../admin/profile.php");
			   }
			   
			else
			{
			
			Header("Location:index.php:");
			mysql_close();
			
			}
		 } 
		}
		else{
			Header("Location:index.php");
			mysql_close();
		}
	}
}


//Header("Location:index.php");
//mysql_close();
 


?>
