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
<div id="menu"><a href="registrations.php">REGISTER NEW</a> | <a href="list.php">  LIST ALL</a>
 | <a href="update.php">  UPDATE STUDENTS</a>
</div>
<br />
<div id="menu"><a href="news.php">STUDENT PORTAL NEWS</a></div>
</div>

<div id="moveright">

<div id="pagetitle">REGISTER A NEW STUDENT</div>
<form action="register.php" method="POST" enctype="multipart/form-data">
<br /><p></p>
<input type="text" name="id" size="30" value=""/> Student Number / ID
<br /><p></p>
<input type="text" name="password" size="30" value=""/> Temporary Password
<br /><p></p>
<input type="text" name="first" size="30" value=""/> First Name
<br /><p></p>
<input type="text" name="middle" size="30" value=""/> Middle Name
<br /><p></p>
<input type="text" name="last" size="30" value=""/> Last Name
<br /><p></p>
<input type="text" name="dob" size="30" value=""/> Date of Birth ( DD/MM/YYYY )
<br /><p></p>
<select name="gender">
<option value="Female">Female</option>
<option value="Male">Male</option>
</select>Gender
<br /><p></p>
<input type="text" name="email" size="30" value=""/>Official Email Address
<br /><p></p>
<input type="text" name="address" size="30" value=""/> Address
<br /><p></p>
<input type="text" name="phone" size="30" value=""/> Phone ( +234 803 000 0000)
<br /><p></p>
<label for="file">Student Passport:</label>
<input type="file" name="file" id="file" /> 
<br /><p></p>
<select name="faculty">
<option value="Business">Business</option>
<option value="Technology">Technology</option>
</select>Faculty
<br /><p></p>
<select name="department">
<option value="Business Management">Business Management</option>
<option value="Management Information Systems">Management Information Systems</option>
</select>Department
<br /><p></p>
<select name="program">
<option value="Bachelors of Science">Bachelors of Science</option>
<option value="Associate of Science">Associate of Science</option>
</select>Program
<br /><p></p>
<input type="text" name="advisor" size="30" value=""/> Course Advisor
<br /><p></p>
<input type="text" name="doc1" size="10" value=" "/> <input type="text" name="doc2" size="10" value=" "/> 
<input type="text" name="doc3" size="10" value=" "/> <input type="text" name="doc4" size="10" value=" "/> 
<input type="text" name="doc5" size="10" value=" "/>Submitted Docs
<br /><p></p>
<input type="text" name="kinname" size="30" value=""/>Guardians Name
<br /><p></p>
<input type="text" name="kinnum" size="30" value=""/>Guardians Phone Number
<br /><p></p>

<input type="text" name="join" size="30" value=" "/>Year of Admission
<br /><p></p>
<input type="text" name="semester" size="30" value=" "/>Semester of Admission
<br /><p></p>
<input type="submit" value="REGISTER"/>
</form>
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