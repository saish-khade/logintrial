<?php
define('DB_SERVER','sql12.freemysqlhosting.net');
define('DB_USER','sql12357322');
define('DB_PASS' ,'BgMjmP6kL6');
define('DB_NAME', 'sql12357322');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

?>