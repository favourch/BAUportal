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
	$semester= $row['semester'];
	
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

<div id="pagetitle">COURSES THIS SEMESTER</div>

<?php

$resulting = mysql_query("SELECT * FROM issued WHERE student='$user'") or die(mysql_error());
 
 while($rows = mysql_fetch_array($resulting)){

	$course1 = $rows['course1'];
	$course2 = $rows['course2'];
	$course3 = $rows['course3'];
	$course4 = $rows['course4'];
	$course5 = $rows['course5'];
	
	}
?>
<br />
<div style="background: #CC0066; color: #ffffff; padding: 5px;"><strong><?php echo $course1; ?></strong> 
<a href="#1" onclick="showDiv1()"> Show</a> / <a href="#" onclick="hideDiv1()"> Hide </a>
</div>

<div id="courses1" style="display:none;">
<?php

$result1 = mysql_query("SELECT * FROM courses WHERE code='$course1'") or die(mysql_error());
 
 while($rowss = mysql_fetch_array($result1)){

	$coursen = $rowss['Name'];
	$coursei = $rowss['Instructor'];
	$coursec = $rowss['Class'];
	$courses = $rowss['Schedule'];
	}
?>
<b>Course Name: </b> <?php echo $coursen; ?> <br />
<b>Course Instructor: </b> <?php echo $coursei; ?> <br />
<b>Course Venue: </b> <?php echo $coursec; ?> <br />
<b>Course Time: </b> <?php echo $courses; ?> <br /> <br />
</div>
<br />
<div style="background: #CC0066; color: #ffffff; padding: 5px;"><strong><?php echo $course2; ?></strong>
<a href="#2" onclick="showDiv2()"> Show</a> / <a href="#" onclick="hideDiv2()"> Hide </a>
</div>

<div id="courses2" style="display:none;">
<?php

$result2 = mysql_query("SELECT * FROM courses WHERE code='$course2'") or die(mysql_error());
 
 while($rowss2 = mysql_fetch_array($result2)){

	$coursen2 = $rowss2['Name'];
	$coursei2 = $rowss2['Instructor'];
	$coursec2 = $rowss2['Class'];
	$courses2 = $rowss2['Schedule'];
	}
?>
<b>Course Name: </b> <?php echo $coursen2; ?> <br />
<b>Course Instructor: </b> <?php echo $coursei2; ?> <br />
<b>Course Venue: </b> <?php echo $coursec2; ?> <br />
<b>Course Time: </b> <?php echo $courses2; ?> <br /> <br />

</div>
<br />
<div style="background: #CC0066; color: #ffffff; padding: 5px;"><strong><?php echo $course3; ?></strong>
<a href="#3" onclick="showDiv3()"> Show</a> / <a href="#" onclick="hideDiv3()"> Hide </a>
</div>

<div id="courses3" style="display:none;">
<?php

$result3 = mysql_query("SELECT * FROM courses WHERE code='$course3'") or die(mysql_error());
 
 while($rowss3 = mysql_fetch_array($result3)){

	$coursen3 = $rowss3['Name'];
	$coursei3 = $rowss3['Instructor'];
	$coursec3 = $rowss3['Class'];
	$courses3 = $rowss3['Schedule'];
	}
?>
<b>Course Name: </b> <?php echo $coursen3; ?> <br />
<b>Course Instructor: </b> <?php echo $coursei3; ?> <br />
<b>Course Venue: </b> <?php echo $coursec3; ?> <br />
<b>Course Time: </b> <?php echo $courses3; ?> <br /> <br />

</div>
<br />
<div style="background: #CC0066; color: #ffffff; padding: 5px;"><strong><?php echo $course4; ?></strong>
<a href="#4" onclick="showDiv4()"> Show</a> / <a href="#" onclick="hideDiv4()"> Hide </a>
</div>

<div id="courses4" style="display:none;">
<?php

$result4 = mysql_query("SELECT * FROM courses WHERE code='$course4'") or die(mysql_error());
 
 while($rowss4 = mysql_fetch_array($result4)){

	$coursen4 = $rowss4['Name'];
	$coursei4 = $rowss4['Instructor'];
	$coursec4 = $rowss4['Class'];
	$courses4 = $rowss4['Schedule'];
	}
?>
<b>Course Name: </b> <?php echo $coursen4; ?> <br />
<b>Course Instructor: </b> <?php echo $coursei4; ?> <br />
<b>Course Venue: </b> <?php echo $coursec4; ?> <br />
<b>Course Time: </b> <?php echo $courses4; ?> <br /> <br />

</div>
<br />
<div style="background: #CC0066; color: #ffffff; padding: 5px;"><strong><?php echo $course5; ?></strong>
<a href="#5" onclick="showDiv5()"> Show</a> / <a href="#" onclick="hideDiv5()"> Hide </a>
</div>

<div id="courses5" style="display:none;">
<?php

$result5 = mysql_query("SELECT * FROM courses WHERE code='$course5'") or die(mysql_error());
 
 while($rowss5 = mysql_fetch_array($result5)){

	$coursen5 = $rowss5['Name'];
	$coursei5 = $rowss5['Instructor'];
	$coursec5 = $rowss5['Class'];
	$courses5 = $rowss5['Schedule'];
	}
?>
<b>Course Name: </b> <?php echo $coursen5; ?> <br />
<b>Course Instructor: </b> <?php echo $coursei5; ?> <br />
<b>Course Venue: </b> <?php echo $coursec5; ?> <br />
<b>Course Time: </b> <?php echo $courses5; ?> <br /> <br />

</div>


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