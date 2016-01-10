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

//create table in my_db database
mysql_select_db("my_db", $con);
$sql = "CREATE TABLE Persons
(
	First varchar(15),
	LastName varchar(15),
	Age int
)";

mysql_query($sql, $con);

//close database
mysql_close($con);	
?>