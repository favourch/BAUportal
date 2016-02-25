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


<div id="moveleft">

<!--div id="avatar">
<?php
echo '
    <div>
        <div class="thumbnail">
            <img src="'.$photo.'" />
            <div class="caption">
                <p> '.$first.''.$last.' </p>
            </div>
        </div>
    </div>

';
?>
</div>

<div id="name">
<?php
echo '<b>'.$first.'</b>';
echo '<br />';
echo $last;
?>
</div-->

<div style="clear:both;"></div>
<!--?php 
echo '<br />';
echo '<a href="checkout.php">Logout</a>';
echo '<br />';
echo '<a href="password.php">Change Password</a>';
echo '<br />';
echo '<a href="update.php">Update Information</a>';
?-->
<hr />
<div id="pagetitle">MENU</div>
<br />
<div>
        <ul class="nav nav-tabs nav-stacked">

            <li role="presentation" >
                <a href="sidebar.php#/personal"> <span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a>
            </li>
            <li role="presentation" >
                <a href="academics.php"> <span class="glyphicon glyphicon-education" aria-hidden="true"></span> Academic Info</a>
            </li>
            <li role="presentation" >
                <a href="accounts.php"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span> Student Account</a>
            </li>
        </ul>
</div>
<!--div id="menu"><a href="sidebar.php">HOME</a></div>
<br />
<div id="menu"><a href="academics.php">ACADEMICS</a></div>
<br />
<div id="menu"><a href="accounts.php">ACCOUNTS</a></div-->
</div>

<?php include("portal_header.php"); ?>
<div id="moveright" ng-app='myApp'>
<ul class="nav nav-tabs">
  <li role="presentation" ><a href="#personal">Personal</a></li>
  <li role="presentation"><a href="#academic">Academic</a></li>
  <li role="presentation"><a href="#docs">Documents</a></li>
<li role="presentation"><a href="#guardian">Guradian</a></li>

</ul>
<div  class="panel panel-default">
    <div class="panel-body">
        <div ng-view=""></div>
    </div>
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