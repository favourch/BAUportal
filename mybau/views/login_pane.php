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