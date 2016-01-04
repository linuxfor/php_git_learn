<!DOCTYPE>
<html>
<body>

<?php
//date()函数会返回服务器的当前日期和时间
//不一定和实际的时间同步
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "The year is " . date("Y") . "<br>";
echo "The current time is " . date("h:i:sa") . "<br>";
?>

</body>
</html>