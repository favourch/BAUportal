<?php
include "../userToInclude.php"
?>

<div id="moveright2">
<table>
<tr>
<td><div id="pagetitle">ACADEMIC</div></td>
</tr>
<tr>
<td><b>Joined: </b></td>
<td><?php echo $semester. ', '.$join; ?></td>
</tr>
<tr>
<td><b>Department: </b></td>
<td><?php echo $department; ?></td>
</tr>
<tr>
<td><b>Faculty: </b></td>
<td><?php echo $faculty; ?></td>
</tr>
<tr>
<td><b>Program Type: </b></td>
<td><?php echo $program; ?></td>
</tr>
<tr>
<td><b>Course Advisor: </b></td>
<td><?php echo $advisor; ?></td>
</tr>
</table>
</div>