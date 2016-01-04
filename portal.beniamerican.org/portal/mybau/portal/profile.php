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
	$join= $row['joinyear'];
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

<div id="moveright2">
<table>
<tr>
<td><div id="pagetitle">PERSONAL</div></td>
</tr>
<tr>
<td><b>Name: </b></td>
<td><?php echo $first.' '.$middle. ' '.$last; ?></td>
</tr>
<tr>
<td><b>Date of Birth: </b></td>
<td><?php echo $dob; ?></td>
</tr>
<tr>
<td><b>Gender: </b></td>
<td><?php echo $gender; ?></td>
</tr>
<tr>
<td><b>Address: </b></td>
<td><?php echo $address; ?></td>
</tr>
<tr>
<td><b>Contact Number: </b></td>
<td><?php echo $phone; ?></td>
</tr>
<tr>
<td><b>Email:</b></td>
<td><?php echo $email; ?></td>
</tr>
<tr>
<td><div id="pagetitle">ACADEMIC</div></td>
</tr>
<tr>
<td><b>Joined: </b></td>
<td><?php echo $semester. ', '.$join; ?></td>
</tr>
<tr>
<td><b>Department: </b></td>
<td><?php echo $department; ?></td>
</tr>
<tr>
<td><b>Faculty: </b></td>
<td><?php echo $faculty; ?></td>
<tr>
<tr>
<td><b>Program Type: </b></td>
<td><?php echo $program; ?></td>
</tr>
<tr>
<td><b>Course Advisor: </b></td>
<td><?php echo $advisor; ?></td>
</tr>
<tr>
<td><div id="pagetitle">GUARDIAN</div></td>
</tr>
<tr>
<td><b>Name: </b></td>
<td><?php echo $kinname; ?></td>
</tr>
<tr>
<td><b>Contact: </b></td>
<td><?php echo $kinnum; ?></td>
</tr>
</table>
</div>

<div id="moveright3">
<table>
<tr>
<td><div id="pagetitle">DOCUMENTS SUBMITTED</div></td>
</tr>
<tr>
<td><b>1: </b><?php echo $doc1; ?></td>
</tr>
<tr>
<td><b>2: </b><?php echo $doc2; ?></td>
</tr>
<tr>
<td><b>3: </b><?php echo $doc3; ?></td>
</tr>
<tr>
<td><b>4: </b><?php echo $doc4; ?></td>
</tr>
<tr>
<td><b>5: </b><?php echo $doc5; ?></td>
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