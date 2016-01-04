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
</div>

<div id="moveright2">
<table>
<tr>
<td><div id="pagetitle">QUICK LINKS</div></td>
</tr>
<tr>
<td><div id="menu"><a href="list.php">LIST ALL STUDENTS</a></div></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>
</table>
</div>

<div id="moveright3">
<table>
<tr>
<td><div id="pagetitle">QUICK OPERATIONS</div></td>
</tr>
<tr>
<td>SEARCH: <form action="search.php" method="GET">
<input type="text" name="s" size="20" value=""/>
<input type="submit" value="SUBMIT"/>
</form></td>
</tr>
<tr>
<td><div id="divider"></div></td>
</tr>
<tr>
<td>QUICK TRANSACTION<form action="transact.php" method="POST">
<input type="text" name="sid" size="20" value=""/><b>Student Number</b><br />
<input type="text" name="amount" size="20" value=""/><b>Amount (no sym)</b><br />
<select name="type">
<option value="Deposit">Deposit</option>
<option value="Withdrawal">Withdrawal</option>
</select> <b>Transation Type</b><br />
<select name="part">
<option value="Spring 2012">Spring 2012</option>
<option value="Fall 2012">Fall 2012</option>
<option value="Spring 2013">Spring 2013</option>
<option value="Fall 2013">Fall 2013</option>
<option value="Spring 2014">Spring 2014</option>
<option value="Fall 2014">Fall 2014</option>
</select> <b>Semester</b><br />
<b>Description: </b>
<textarea name="description" rows="5" cols="35"/></textarea><br />
<input type="submit" value="POST"/></td></form>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>
</table>
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