<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_writy = "localhost";
$database_writy = "capucina";
$username_writy = "adminwrity";
$password_writy = "IronF!st1981";
$writy = mysql_pconnect($hostname_writy, $username_writy, $password_writy) or trigger_error(mysql_error(),E_USER_ERROR); 
?>