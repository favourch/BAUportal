<?php
include "userToInclude.php"
?>
<div id='portal_header'>
	<div id="portal_dropdown" class="dropdown">
		<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
		  <span class="glyphicon glyphicon-user" aria-hidden="true"></span> 
		</button>
		<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
		    <li><a href="update.php">Update Info</a></li>
		    <li><a href="password.php">Change Password</a></li>
		    <li role="separator" class="divider"></li>
		    <li><a href="logout.php">Logout</a></li>
  		</ul>
	</div>
	<?php
	echo '<p> Hello, '.$first.'</p>';
	?>
</div>