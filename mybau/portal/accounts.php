<?php

session_start();

if(isset($_SESSION['profiles'])){
$user = $_SESSION['profiles'];
$photo = "images/$user.JPG";
include"connect_to_mysql.php";
$results = mysql_query("SELECT * FROM students,accounts WHERE students.id='$user' AND students.id=accounts.id GROUP BY students.id") or die(mysql_error());
 
 while($row = mysql_fetch_array($results)){

    
	$first = $row['first'];
	$middle = $row['middle'];
	$last = $row['last'];
	$total = $row['total'];
	$balance = $row['balance'];

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

<div id="pagetitle">TRANSACTIONS HISTORY</div>

<?php
$result = mysql_query("SELECT * FROM transactions WHERE transactions.sid='$user'") or die(mysql_error());
 
$num = mysql_numrows($result);

$i = 0;

echo 'Transaction ID --------- Transaction Type ------ Description -------------- Amount';

while ($i < $num) {

	$tid = mysql_result($result, $i, "tid");
	$amount = mysql_result($result, $i, "amount");
	$type = mysql_result($result, $i, "type");
	$part = mysql_result($result, $i, "part");
	$description = mysql_result($result, $i, "description");
	

$i++;
?>
<table>
<th></th><th></th><th></th><th></th>
<tr>
<td><?php echo $tid; ?> </td>
<td><?php echo $type; ?> </td>
<td><?php echo $part.', '.$description; ?> </td>
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