<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conn = "localhost";
$database_conn = " pharmacovigilance";
$username_conn = "root";
$password_conn = "eng_hoba123";
$conn = new mysqli("localhost", "root", "eng_hoba123", "pharmacovigilance")or trigger_error(mysqli_error(),E_USER_ERROR); 
$db=mysqli_select_db($database_conn,$conn);
?>
