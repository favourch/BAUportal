<?php  

// Place db host name.   
//$db_host = "hostingdb.gotonames.com"; 
$db_host = "localhost"

// Place the username for the MySQL database here 
//$db_username = "beniportaluser";  
$db_username = "bauedung_mo";

// Place the password for the MySQL database here 
//$db_pass = "1a2b3c4d5e01$";  
$db_pass = "mo@bau.edu.ng";  


// Place the name for the MySQL database here 
//$db_name = "beniportal"; 
$db_name = "bauedung_test"; 

// Run the actual connection here  
mysql_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
mysql_select_db("$db_name") or die ("no database");              
?>