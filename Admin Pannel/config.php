<?php
	$dbHost='localhost';
	$dbUser='root';
	$dbPassword='';
	$dbName='Travel';

//create connection

	$conn=mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);
//check connection

if (!$conn) 
{
	die("connection failed: ".mysqli_connect_error());
}
//session_start();

?>