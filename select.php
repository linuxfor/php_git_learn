<?php
$con = mysql_connect("localhost", "hyper", "hyper@5");
if (!$con)
{
	die('Could not connect: '.mysql_error());
}

mysql_select_db("my_db", $con);
$result = mysql_query("SELECT * FROM Persons");

while($row = mysql_fetch_array($result))
{
	echo $row['FirstName']." ".$row['LastName'];
	echo "<br />";
}

mysql_close($con);
?>