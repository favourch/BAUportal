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

<?php $pagetoptitle = 'Registration Complete'; ?>
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

<?php

$id = $_GET["id"];

$result = mysql_query("SELECT * FROM students WHERE id = '$id'") or die(mysql_error());

while($row = mysql_fetch_array($result))
    {
	$ids = $row['id']; 
	$passwords = $row['password'];
	$firsts = $row['first'];
	$middles = $row['middle'];
	$lasts = $row['last'];
	$dobs = $row['dob'];
	$genders = $row['gender'];
	$addresss = $row['address'];
	$phones = $row['phone'];
	$facultys = $row['faculty'];
	$departments = $row['department'];
	$programs = $row['program'];
	$advisors = $row['advisor'];
	$doc4s = $row['doc4'];
	$doc5s = $row['doc5'];
	$doc3s = $row['doc3'];
	$doc2s = $row['doc2'];
	$doc1s = $row['doc1'];
	$kinnames = $row['kinname'];
	$kinnums = $row['kinnum'];
	$emails = $row['email'];
	$joins= $row['joinyear'];
	$semesters= $row['semester'];

	mysql_close();
	
    }
?>

<form action="updated.php" method="POST" enctype="multipart/form-data">
<br /><p></p>
<input type="text" name="id" size="30" value="<?php echo $ids; ?>"/> <b>DO NOT CHANGE</b>
<br /><p></p>
<input type="text" name="password" size="30" value="<?php echo $passwords; ?>"/> Temporary Password
<br /><p></p>
<input type="text" name="first" size="30" value="<?php echo $firsts; ?>"/> First Name
<br /><p></p>
<input type="text" name="middle" size="30" value="<?php echo $middles; ?>"/> Middle Name
<br /><p></p>
<input type="text" name="last" size="30" value="<?php echo $lasts; ?>"/> Last Name
<br /><p></p>
<input type="text" name="dob" size="30" value="<?php echo $dobs; ?>"/> Date of Birth ( DD/MM/YYYY )
<br /><p></p>
<select name="gender">
<option value="Female">Female</option>
<option value="Male">Male</option>
<option selected="selected" value="<?php echo $genders; ?>"><?php echo $genders; ?></option>
</select>Gender
<br /><p></p>
<input type="text" name="email" size="30" value="<?php echo $emails; ?>"/>Official Email Address
<br /><p></p>
<input type="text" name="address" size="30" value="<?php echo $addresss; ?>"/> Address
<br /><p></p>
<input type="text" name="phone" size="30" value="<?php echo $phones; ?>"/> Phone ( +234 803 000 0000)
<br /><p></p>
<label for="file">Student Passport:</label>
<input type="file" name="file" id="file" /> 
<br /><p></p>
<select name="faculty">
<option value="Business">Business</option>
<option value="Technology">Technology</option>
<option selected="selected" value="<?php echo $facultys; ?>"><?php echo $facultys; ?></option>
</select>Faculty
<br /><p></p>
<select name="department">
<option value="Business Management">Business Management</option>
<option value="Management Information Systems">Management Information Systems</option>
<option selected="selected" value="<?php echo $departments; ?>"><?php echo $departments; ?></option>
</select>Department
<br /><p></p>
<select name="program">
<option value="Bachelors of Science">Bachelors of Science</option>
<option value="Associate of Science">Associate of Science</option>
<option selected="selected" value="<?php echo $programs; ?>"><?php echo $programs; ?></option>
</select>Program
<br /><p></p>
<input type="text" name="advisor" size="30" value="<?php echo $advisors; ?>"/> Course Advisor
<br /><p></p>
<input type="text" name="doc1" size="10" value="<?php echo $doc1s; ?>"/> <input type="text" name="doc2" size="10" value="<?php echo $doc2s; ?>"/> 
<input type="text" name="doc3" size="10" value="<?php echo $doc3s; ?>"/> <input type="text" name="doc4" size="10" value="<?php echo $doc4s; ?>"/> 
<input type="text" name="doc5" size="10" value="<?php echo $doc5s; ?>"/>Submitted Docs
<br /><p></p>
<input type="text" name="kinname" size="30" value="<?php echo $kinnames; ?>"/>Guardians Name
<br /><p></p>
<input type="text" name="kinnum" size="30" value="<?php echo $kinnums; ?>"/>Guardians Phone Number
<br /><p></p>

<input type="text" name="join" size="30" value="<?php echo $joins; ?>"/>Year of Admission
<br /><p></p>
<input type="text" name="semester" size="30" value="<?php echo $semesters; ?>"/>Semester of Admission
<br /><p></p>
<input type="submit" value="UPDATE"/>
</form>


 
<?php
}


?>

<div id="divider"> </div>
</div>
<div style="clear:both;"></div>


<?php

if(!isset($_SESSION['profiles'])){
Header("Location:../index.php");
}

?>
<div style="clear:both;"></div>
<hr />

<?php include("../footer.php"); ?>