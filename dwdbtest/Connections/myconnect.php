<title>Bizcomp Yru</title>
<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_myconnect = "localhost";
$database_myconnect = "databasedw";
$username_myconnect = "root";
$password_myconnect = "";
$myconnect = mysql_pconnect($hostname_myconnect, $username_myconnect, $password_myconnect) or trigger_error(mysql_error(),E_USER_ERROR);
mySql_query("Set Names UTF8"); 
?>