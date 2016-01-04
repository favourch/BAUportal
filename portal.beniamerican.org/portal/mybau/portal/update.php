<?php

session_start();

if(isset($_SESSION['profiles'])){

$user = $_SESSION['profiles'];
$photo = "images/$user.JPG";
include"connect_to_mysql.php";
$results = mysql_query("SELECT * FROM students WHERE id='$user'") or die(mysql_error());
 
 while($row = mysql_fetch_array($results)){

	$first = $row['first'];
	$last = $row['last'];
	$addresss = $row['address'];
	$phones =$row['phone'];
	
	
	}
mysql_close();
?>

<?php $pagetoptitle = 'Member Page'; ?>
<?php include("../top.php"); ?>

<br />
<p></p>

<div id="moveleft">

<div id="avatar">
<?php
echo '<img src="'.$photo.'" width="100px" border="4px" height="100px"/>';
?>
</div>

<div id="name">
<?php
echo '<b>'.$first.'</b>';
echo '<br />';
echo $last;
?>
</div>

<div style="clear:both;"></div>
<?php 
echo '<br />';
echo '<a href="checkout.php">Logout</a>';
echo '<br />';
echo '<a href="password.php">Change Password</a>';
echo '<br />';
echo '<a href="update.php">Update Information</a>';
?>
<hr />
<div id="pagetitle">MENU</div>
<br />
<div id="menu"><a href="profile.php">HOME</a></div>
<br />
<div id="menu"><a href="academics.php">ACADEMICS</a></div>
<br />
<div id="menu"><a href="accounts.php">ACCOUNTS</a></div>
</div>

<div id="moveright">

<form action="updated.php" method="POST">
<br /><p></p>
<input type="text" name="address" size="30" value="<?php echo $addresss; ?>"/> Address
<br /><p></p>
<input type="text" name="phone" size="30" value="<?php echo $phones; ?>"/> Phone ( +234 803 000 0000)
<br /><p></p>
<input type="submit" value="UPDATE"/>
</form>


 
<?php
}


?>

<div id="divider"> </div>
</div>
<div style="clear:both;"></div>


<?php

if(!isset($_SESSION['profiles'])){
Header("Location:../index.php");
}

?>
<div style="clear:both;"></div>
<hr />

<?php include("../footer.php"); ?>