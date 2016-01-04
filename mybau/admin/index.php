<?php include("../top.php"); ?>

<div id="wrapper2">
<div id="content">
  <div id="pagetitle">WELCOME TO THE ADMINISTRATION PORTAL OF BENI AMERICAN UNIVERSITY</div>
  <hr /><br />
  <p></p>
  <p></p>

  <div id="info">
  <b></b>
  <?php
  include"connect_to_mysql.php"; 
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


  <div id="login">
  <!--a href="../accounts/"><b>LOGIN</b></a-->

  <div class="btn-group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Account type <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
    	<li><a href="../">Student</a></li>
      <li role="separator" class="divider"></li>
      <li><a href="#">Admin</a></li>
      <li role="separator" class="divider"></li>
      <li><a href="../accounts">Accountant</a></li>
    </ul>
  </div>
  <hr />
  <form action="login.php" method="POST">
  Admin User: <input type="text" name="adminuser" size="30" value=""/>
  <br /><p></p>
  Password: <input type="password" name="password" size="30" value=""/>
  <br /><p></p><p></p>
  <input type="submit" value="SUBMIT"/>
  </form>
  </div>

  <div style="clear:both;"></div>



  <hr />
</div>
</div>
<?php include("../footer.php"); ?>