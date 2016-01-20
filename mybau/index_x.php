<?php include("top.php"); ?>


<div id="wrapper2">
<div id='content'>
  <div id="pagetitle">
	  <img  id="pagetitleimg" src='./images/Bau_onlineLogo2.png' alt="BAU Logo">
	  <p>WELCOME TO THE STUDENTS PORTAL OF BAU Online</p>
  </div>
  <hr /><br />

<div class="row">
	<div class = "col-sm-4 col-md-4 col-lg-4">
		<ul class="nav nav-tabs nav-stacked">
		  <li role="presentation" ><a href="./index.php">Students Info</a></li>
		  <li role="presentation" class="active"><a href="#">LogIn</a></li>
		</ul>
	</div>


	<div class = "col-sm-8 col-md-8 col-lg-8">
		<div id="login">
		  <div class="btn-group">
		    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		      Account type <span class="caret"></span>
		    </button>
		    <ul class="dropdown-menu">
		    	<li><a href="#">Student</a></li>
		      <li role="separator" class="divider"></li>
		      <li><a href="./admin">Admin</a></li>
		      <li role="separator" class="divider"></li>
		      <li><a href="./accounts">Accountant</a></li>
		    </ul>
		  </div>
		  <hr />
		  <form action="portal/login.php" method="POST">
		  UserID: <input type="text" name="studentid" size="30" value=""/>
		  <br /><p></p>
		  Password: <input type="password" name="password" size="30" value=""/>
		  <br /><p></p><p></p>
		  <input type="submit" class='btn btn-secondary' value="SUBMIT"/>
		  </form>
  	</div>

	</div>
</div>

<div style="clear:both;"></div>



<hr />
</div>
</div>
<?php include("./footer.php"); ?>