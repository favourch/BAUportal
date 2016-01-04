<?php

session_start();

if(isset($_SESSION['accounting'])){
$user = $_SESSION['accounting'];
$photo = "images/$user.JPG";
include"connect_to_mysql.php";
$results = mysql_query("SELECT * FROM accs WHERE id='$user'") or die(mysql_error());
 
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
<div id="menu"><a href="list.php">  LIST ALL</a></div>
<br />
</div>


<div id="moveright">

<div id="pagetitle">LIST OF STUDENTS</div>

<?php

$s=$_GET["s"];

$result = mysql_query("SELECT * FROM students WHERE id LIKE '%$s%' OR first LIKE '%$s%' OR last LIKE '%$s%' ORDER BY id") or die(mysql_error());
 
$num = mysql_numrows($result);

$i = 0;

echo '<br />';

while ($i < $num) {

	$id = mysql_result($result, $i, "id");
	$first = mysql_result($result, $i, "first");
	$last = mysql_result($result, $i, "last");
	$department = mysql_result($result, $i, "department");

$i++;
?>

<?php echo $id; ?><br />
<b><?php echo $first; ?> <?php echo $last; ?> </b><br />
<?php echo $department; ?> <br />
<a href="view.php?s=<?php echo $id; ?>">VIEW ACCOUNT</a><br />
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