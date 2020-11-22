<?php
// DATABASE CONNECTION

$localhost = 'localhost';
$username = 'root';
$password = '';
$dbname = 'workgenerator';

$con = mysqli_connect($localhost, $username, $password, $dbname);

if(!$con)
{
	echo "Database not connected";
}

?>