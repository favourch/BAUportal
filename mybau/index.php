<?php include("top.php"); ?>

<div id="wrapper2">
<div id='content'>
  <div id="pagetitle">
    <!--img id="pagetitleimg" src='./images/Bau_onlineLogo2.png' alt="BAU Logo"-->
    <p >WELCOME TO THE STUDENTS PORTAL OF BAU Online</p>
  </div>
  <hr /><br />

<div class="row" ng-app='landingPage'>
  <div class="col-sm-4 col-md-4 col-lg-4">
    <ul class="nav nav-tabs nav-stacked">
      <li role="presentation" class="active"><a href="#studentInfo">Student Info</a></li>
      <li role="presentation"><a href="#login_user">LogIn</a></li>
    </ul>
  </div>
  
  <!--div class="col-sm-8 col-md-8 col-lg-8">
    <div id="info">
      <b>GENERAL STUDENTS INFORMATION</b>
      <hr />
      <?php
      include"portal/connect_to_mysql.php"; 
      $result = mysql_query("SELECT * FROM news ORDER BY id DESC LIMIT 1") or die(mysql_error());
       
      $num = mysql_numrows($result);

      $i = 0;

      echo '<br />';

      while ($i < $num) {

      	$id = mysql_result($result, $i, "id");
      	$news = mysql_result($result, $i, "content");

          $i++;
          echo $news;

      }

      ?>
    </div>
  </div-->
  <div ng-view=" "></div>
</div>
  


  <div style="clear:both;"></div>



  <hr />
</div>
</div>
  <?php include("./footer.php"); ?>
