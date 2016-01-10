<?php
//connect database server
$con = mysql_connect("localhost", "hyper", "hyper@5");
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

//select the database before creating table
mysql_select_db("my_db", $con);
$sql = "CREATE TABLE Persons
(
	personID int NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(personID),
	First varchar(15),
	LastName varchar(15),
	Age int
)";
//create table in my_db database
mysql_query($sql, $con);

//close database
mysql_close($con);	
?>