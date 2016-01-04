<?php

session_start();

if(isset($_SESSION['accounting'])){
$user = $_SESSION['accounting'];

include"connect_to_mysql.php";
$results = mysql_query("SELECT * FROM accs WHERE id='$user'") or die(mysql_error());
 
 while($row = mysql_fetch_array($results)){

	$password = $row['password'];
	
	}
mysql_close();
?>

<?php $pagetoptitle = 'Member Page'; ?>
<?php include("../top.php"); ?>


<br />
<p></p>
<div id="moveleft">
<p></p>
<p>

   <form action="pass.php" method="post">
   Old Password: <input type="password" name="password" size="30" value=""/>
   <br /><p></p>
   New Password: <input type="password" name="passes" size="30" value=""/>
   <br /><p></p><p></p>
   New Password Again: <input type="password" name="passes1" size="30" value=""/>
   <br /><p></p><p></p>
   <input type="submit" value="SUBMIT"/>
   </form>
</p>
<hr />
<a href="profile.php">Click Here to Return</a>
</div>


<?php
}

else
{

Header("Location:../index.php");
}
?>
<div style="clear:both;"></div>
<hr />

<?php include("../footer.php"); ?>