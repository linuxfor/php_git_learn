<!DOCTYPE>
<html>
<body>

<?php

//setup the time zone
date_default_timezone_set("Asia/Shanghai");

//date()函数会返回服务器的当前日期和时间
//不一定和实际的时间同步
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "The year is " . date("Y") . "<br>";
echo "The current time is " . date("h:i:sa") . "<br>";

/*
//tested result:
Today is 2016/01/04
Today is 2016.01.04
Today is 2016-01-04
The year is 2016
The current time is 11:46:36pm
*/
?>

</body>
</html>