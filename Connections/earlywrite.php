<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_earlywrite = "localhost";
$database_earlywrite = "earlysignup";
$username_earlywrite = "writer";
$password_earlywrite = "damavand81";
$earlywrite = mysql_pconnect($hostname_earlywrite, $username_earlywrite, $password_earlywrite) or trigger_error(mysql_error(),E_USER_ERROR); 
?>