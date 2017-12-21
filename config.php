<?php
$dbhost= 'localhost';
$dbuser= 'root';
$dbpass= 'mysql';
$db= 'TaskDB';


$link= mysqli_connect($dbhost, $dbuser, $dbpass, $db);
if (!$link)
{
	die('Could nt connect :'.mysqli_error().' this is error');
}
?>