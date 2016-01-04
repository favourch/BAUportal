<?php include("top.php"); ?>



<div id="pagetitle">WELCOME TO THE STUDENTS PORTAL OF BAU Online</div>
<hr /><br />
<p></p>
<p></p>

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


<div id="login">
<b><a href="admin">LOGIN</a></b>
<hr />
<form action="portal/login.php" method="POST">
Student ID: <input type="text" name="studentid" size="30" value=""/>
<br /><p></p>
Password: <input type="password" name="password" size="30" value=""/>
<br /><p></p><p></p>
<input type="submit" value="SUBMIT"/>
</form>

</div>

<div style="clear:both;"></div>



<hr />

<?php include("footer.php"); ?>