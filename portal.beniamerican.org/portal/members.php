<?php

session_start();

if(isset($_SESSION['profiles'])){
$users = $_SESSION['profiles'];

include"connect_to_mysql.php";
$results = mysql_query("SELECT * FROM mymembers WHERE username='$users'") or die(mysql_error());
 
 while($row = mysql_fetch_array($results)){

	$first = $row['firstname'];
	$last = $row['lastname'];
	$country =$row['country'];
	$city = $row['city'];
	$lphoto = $row['userphoto'];
	$gender = $row['gender'];
	
	}
mysql_close();
?>

<?php $pagetoptitle = 'Member Page'; ?>
<?php include("top.php"); ?>


<br />
<p></p>
<div id="moveleft">
<div id="featured"> </div>
<p></p>
<p>
<b>Members List</b>
<hr />
<?php
include"connect_to_mysql.php";
$resulting = mysql_query("SELECT * FROM mymembers") or die(mysql_error());

$nums=mysql_numrows($resulting);

mysql_close();

$ii=0;
while ($ii < $nums) {

    $mfirst = mysql_result($resulting,$ii,"firstname");
	$muser = mysql_result($resulting,$ii,"username");
	$mlast = mysql_result($resulting,$ii,"lastname");
    $mphoto=mysql_result($resulting,$ii,"userphoto");

echo '<br />';
echo '<img src="'.$mphoto.'" width="50px" height="50px"/>';
echo ' '.$mfirst.' '.$mlast;
echo ' | <a href="profile.php?username='.$muser.'">Visit Profile</a> ';
echo '<br />';
echo '<hr />';

$ii++;
}
?>
</div>

<div id="sidebar">
<b>Profile</b>
<?php
echo '<br /><hr />';
echo '<img src="'.$lphoto.'" width="150px" height="150px"/>';
echo '<br />';
echo '<b>'.$first.' '.$last.'</b>'; 
echo '<br />';
echo '<b>City: </b>'.$city;
echo '<br />';
echo '<b>Country: </b>'.$country;
echo '<br />';
echo '<b>Gender: </b>'.$gender;
echo '<br />';
echo '<br />';
echo '<a href="editprofile.php">Edit Profile</a>';
echo '<br />';
echo '<br />';
echo '<a href="logout.php">Logout</a>';
echo '<br />';
echo '<br />';
echo '<a href="members.php"><b>Members List</b></a>';
?>
</div>

<?php
}

else
{

Header("Location:index.php");
}
?>
<div style="clear:both;"></div>
<hr />

<?php include("footer.php"); ?>