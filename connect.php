<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'r73203exce_istorie');
define('DB_PASSWORD', 'IoanaJulia');
define('DB_DATABASE', 'r73203exce_istorie');

$link= mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if($link==false)
{
    die('Connection failed!').mysqli_connect_error();
}
?>