<?php

session_start();

if(isset($_SESSION['profiles'])){
$user = $_SESSION['profiles'];
$photo = "images/$user.JPG";
include"connect_to_mysql.php";
$results = mysql_query("SELECT * FROM admin WHERE id='$user'") or die(mysql_error());
 
 while($row = mysql_fetch_array($results)){

	$first = $row['first'];
	$last = $row['last'];
	$role =$row['role'];
	$department = $row['department'];
	}

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
echo '<b>Role: </b>'.$role;
echo '<br />';
echo '<b>Deparment: </b>'.$department;
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
<div id="menu"><a href="registrations.php">REGISTER NEW</a> | <a href="list.php">  LIST ALL</a>
 | <a href="update.php">  UPDATE STUDENTS</a>
</div>
<br />
<div id="menu"><a href="news.php">STUDENT PORTAL NEWS</a></div>
</div>


<div id="moveright">

<div id="pagetitle">NEWS POSTINGS</div>

<?php

$result = mysql_query("SELECT * FROM news ORDER BY id DESC") or die(mysql_error());
 
$num = mysql_numrows($result);

$i = 0;

echo '<br />';

while ($i < $num) {

	$id = mysql_result($result, $i, "id");
	$news = mysql_result($result, $i, "content");

$i++;
?>

<b><?php echo $id; ?></b><br />
<?php echo $news; ?><br />
<br />
<table>
<th></th><th></th><th></th><th></th>
</table>

<?php

	}

mysql_close();


?>
<div id="divider"> </div>
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