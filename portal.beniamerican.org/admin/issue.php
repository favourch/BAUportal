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

<div id="pagetitle">ADD COURSES TO STUDENTS ACCOUNTS</div>
<?php

$resultss = mysql_query("SELECT * FROM courses") or die(mysql_error());
$options= array();
$num=mysql_numrows($resultss);

$i=0;
while ($i < $num) {

	$code=mysql_result($resultss,$i,"Code");
	$cname=mysql_result($resultss,$i,"Name");
    $options[] = $code.' - '.$cname; 
	
	$i++;
} 
?> 

<form action="issued.php" method="POST">
<br /><p></p>
<input type="text" name="id" size="37" value=""/> Student Number / ID
<br /><br />
<select name="course1">
<option value=""></option>
<?php
$keys = array_keys($options);
for($i=0; $i<count($options); $i++)
{?>
    <option value="<?php echo $options[$i]; ?>"><?php echo $options[$i]; ?></option>
<?php
}
?>
</select>First Course
<br />
<select name="course2">
<option value=""></option>
<?php
$keys = array_keys($options);
for($i=0; $i<count($options); $i++)
{?>
    <option value="<?php echo $options[$i]; ?>"><?php echo $options[$i]; ?></option>
<?php
}
?>
</select>Second Course
<br />
<select name="course3">
<option value=""></option>
<?php
$keys = array_keys($options);
for($i=0; $i<count($options); $i++)
{?>
    <option value="<?php echo $options[$i]; ?>"><?php echo $options[$i]; ?></option>
<?php
}
?>
</select>Third Course
<br />
<select name="course4">
<option value=""></option>
<?php
$keys = array_keys($options);
for($i=0; $i<count($options); $i++)
{?>
    <option value="<?php echo $options[$i]; ?>"><?php echo $options[$i]; ?></option>
<?php
}
?>
</select>Fourth Course
<br />
<select name="course5">
<option value=""></option>
<?php
$keys = array_keys($options);
for($i=0; $i<count($options); $i++)
{?>
    <option value="<?php echo $options[$i]; ?>"><?php echo $options[$i]; ?></option>
<?php
}
?>
</select>Fifth Course
<br /><br />
<input type="submit" value="ADD COURSES"/>
</form>

<br /> <br />
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