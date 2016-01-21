<?php
include "../userToInclude.php"
?>

<div id="moveright2">
<table>
<tr>
<td><div id="pagetitle">PERSONAL</div></td>
</tr>
<tr>
<td><b>Name: </b></td>
<td><?php echo $first.' '.$middle. ' '.$last; ?></td>
</tr>
<tr>
<td><b>Date of Birth: </b></td>
<td><?php echo $dob; ?></td>
</tr>
<tr>
<td><b>Gender: </b></td>
<td><?php echo $gender; ?></td>
</tr>
<tr>
<td><b>Address: </b></td>
<td><?php echo $address; ?></td>
</tr>
<tr>
<td><b>Contact Number: </b></td>
<td><?php echo $phone; ?></td>
</tr>
<tr>
<td><b>Email:</b></td>
<td><?php echo $email; ?></td>
</tr>
</table>
</div>

<div id= 'moveright3'>
	<div id="avatar">
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
</div>