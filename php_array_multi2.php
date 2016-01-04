<!DOCTYPE HTML>
<html>
<body>

<?php
$cars = array
(
	array("Volvo", 33, 20);
	array("BMW", 17, 15);
	array("Saab", 5, 2);
	array("Land Rover", 15, 11);
);

for ($row = 0; $row < 4; $row++) {
	echo "<p><b>row num: $row</b></p>";
	echo "<ul>";
	for ($col = 0; $col < 3; $col++) {
		echo "<li>".$cars[$row][$col]."</li>";
	}
	echo "</ul>";
}
?>

</body>
</html>