<!DOCTYPE>
<html>
<body>

<?php

//setup the time zone
date_default_timezone_set(Asia/Shanghai);

//date()�����᷵�ط������ĵ�ǰ���ں�ʱ��
//��һ����ʵ�ʵ�ʱ��ͬ��
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "The year is " . date("Y") . "<br>";
echo "The current time is " . date("h:i:sa") . "<br>";
?>

</body>
</html>