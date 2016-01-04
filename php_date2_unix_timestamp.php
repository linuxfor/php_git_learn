<!DOCTYPE HTML>
<html>
<body>

<?php
// 01/05/2016 01:18:32am
//mktime(hour, minute, second, month, day, year)
$d = mktime(1, 18, 32, 1, 5, 2016);
echo "Created date is " . date("m/d/Y h:i:sa", $d) . "<br>";

//strtotime(time, now)
$d = strtotime("12:19pm January 05 2016");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>

</body>
</html>