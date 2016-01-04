<?php

session_start();

if(isset($_SESSION['accounting'])){
$user = $_SESSION['accounting'];
$photo = "images/$user.JPG";
include"connect_to_mysql.php";

$resulting = mysql_query("SELECT * FROM accs WHERE id='$user'") or die(mysql_error());
 
 while($rowing = mysql_fetch_array($resulting)){

	$first = $rowing['first'];
	$last = $rowing['last'];
	$role =$rowing['role'];
	$department = $rowing['department'];
	
	
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
<?php

$student = $_GET["s"];

$resultss = mysql_query("SELECT * FROM accounts WHERE id='$student'") or die(mysql_error());
 
 while($rows = mysql_fetch_array($resultss)){

   
	$total = $rows['total'];
	$balance = $rows['balance'];

	}


$result = mysql_query("SELECT * FROM students WHERE id = '$student' ORDER BY id") or die(mysql_error());
 
$num = mysql_numrows($result);

$i = 0;

while ($i < $num) {

	$firsts = mysql_result($result, $i, "first");
	$lasts = mysql_result($result, $i, "last");

$i++;	
	}
	?>


<div id="pagetitle">TRANSACTIONS HISTORY FOR <?php echo $firsts.'  '.$lasts; ?></div>

<?php


	
$result = mysql_query("SELECT * FROM transactions WHERE sid='$student'") or die(mysql_error());
 
$num = mysql_numrows($result);

$i = 0;

echo 'Transaction ID --------- Transaction Type ------ Description -------------- Amount';

while ($i < $num) {

	$tid = mysql_result($result, $i, "tid");
	$amount = mysql_result($result, $i, "amount");
	$type = mysql_result($result, $i, "type");
	$description = mysql_result($result, $i, "description");
	

$i++;
?>
<table>
<th></th><th></th><th></th><th></th>
<tr>
<td><?php echo $tid; ?> </td>
<td><?php echo $type; ?> </td>
<td><?php echo $description; ?> </td>
<td><?php echo $amount; ?> </td>
</tr>
</table>


<?php

	}

mysql_close();


?>
<div id="divider"> </div>
<div id="invisible"><b>BALANCE:</b> <?php echo $balance; ?></div>
<div id="invisible"><b>TOTAL:</b> <?php echo $total; ?></div>
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