<?php
$con = mysql_connecg("localhost", "hyper", "hyper@5");
if (!$con)
{
	die('Could not connect: '.mysql_error());
}

mysql_select_db("my_db", $con);

$result = mysql_query("SELECT * FROM Persons
WHERE FirstName = 'Peter'");

while($row = mysql_fetch_array($result))
{
	echo $row['FirstName']." ".$row['LastName'];
	echo "<br />";
}
?>