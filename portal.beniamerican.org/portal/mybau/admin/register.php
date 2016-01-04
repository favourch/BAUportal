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

$id = $_POST["id"];

	if (isset($id)) {

					}

	else {

			echo 'input records for operation';
		    Header("Location:registrations.php");
         }
		 
		 
$password = $_POST["password"];
$first = $_POST["first"];
$middle = $_POST["middle"];
$last = $_POST["last"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$address = $_POST["address"];
$phone = $_POST["phone"];
$faculty = $_POST["faculty"];
$department = $_POST["department"];
$program = $_POST["program"];
$advisor = $_POST["advisor"];
$doc4 = $_POST["doc4"];
$doc5 = $_POST["doc5"];
$doc3 = $_POST["doc3"];
$doc2 = $_POST["doc2"];
$doc1 = $_POST["doc1"];
$kinname = $_POST["kinname"];
$kinnum = $_POST["kinnum"];
$email = $_POST["email"];
$join= $_POST["join"];
$semester= $_POST["semester"];


// File Upload Codes


  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "../portal/images/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "../portal/images/" . $_FILES["file"]["name"];
      }
    }



mysql_query("INSERT INTO students (id, password, first, middle, last, dob, gender, address, phone, faculty, 
department, program, advisor, doc4, doc5, doc3, doc2, doc1, kinname, kinnum, email, joinyear, semester, officer) 
VALUES('$id', '$password', '$first', '$middle', '$last', '$dob', '$gender', '$address', '$phone', '$faculty', 
'$department', '$program', '$advisor', '$doc4', '$doc5', '$doc3', '$doc2', '$doc1', '$kinname', '$kinnum', 
'$email', '$join', '$semester','$user') ") or die(mysql_error()); 

 
 echo '<br />';
 echo '<br />';
 echo '<br />';
 echo 'STUDENT REGISTRATION SUCCESSFUL <br />';
 echo '<a href="registrations.php"> Click to Continue</a>';
 echo '<br />';
 echo '<br />';
 echo '<br />';
mysql_close();

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