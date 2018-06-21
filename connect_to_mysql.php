<?php
//error_reporting(E_ALL ^ E_DEPRECATED);
?>
<?php   
$db_host = "localhost"; 
$db_username = "jadobah1";   
$db_pass = "jadobah1";  
$db_name = "jadobah1"; 
 
mysql_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
mysql_select_db("$db_name") or die ("no database");              
?>