<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_ready = "localhost";
$database_ready = "capucina";
$username_ready = "adminready";
$password_ready = "TrojanHor$e1359";
$ready = mysql_pconnect($hostname_ready, $username_ready, $password_ready) or trigger_error(mysql_error(),E_USER_ERROR); 
?>