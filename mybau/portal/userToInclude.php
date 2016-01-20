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
<div></div>


<?php
}
else
{

echo "OOOOOPS";

}
?>
