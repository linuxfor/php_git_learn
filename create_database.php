<?php
//connect database server
$con = mysql_connect("localhost", "peter", "abc123");
if (!$con)
{
	die('Could not connect: '.mysql_error());	
}

//create database
if (mysql_query("CREATE DATABASE my_db", $con))
{
	echo "Database created";
}
else
{
	echo "Error creating databse: ".mysql_error();
}

//close database
mysql_close($con);	
?>