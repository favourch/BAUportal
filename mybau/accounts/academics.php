<?php

session_start();

if(isset($_SESSION['profiles'])){
$user = $_SESSION['profiles'];
$photo = "images/$user.JPG";
include"connect_to_mysql.php";
$results = mysql_query("SELECT * FROM students WHERE id='$user'") or die(mysql_error());
 
 while($row = mysql_fetch_array($results)){

	$first = $row['first'];
	$middle = $row['middle'];
	$last = $row['last'];
	$dob =$row['dob'];
	$gender = $row['gender'];
	$address = $row['address'];
	$phone =$row['phone'];
	$faculty= $row['faculty'];
	$department = $row['department'];
	$program = $row['program'];
	$advisor = $row['advisor'];
	$doc1 = $row['doc1'];
	$doc2 = $row['doc2'];
	$doc3 = $row['doc3'];
	$doc4 = $row['doc4'];
	$doc5 = $row['doc5'];
	$kinname = $row['kinname'];
	$kinnum = $row['kinnum'];
	$email=$row['email'];
	$join= $row['join'];
	$semester= $row['semester'];
	
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

<div id="pagetitle">TRANSCRIPT</div>

</div>
<div style="clear:both;"></div>


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