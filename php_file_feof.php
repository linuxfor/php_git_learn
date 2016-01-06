<!DOCTYPE HTML>
<html>
<body>

<?php
$myfile = fopen("webdictionary.txt", "r") or dir("Unable to open file!");
//end-of-file
while(!feof($myfile)){
	echo fgets($myfile) . "<br>";
}

fclose($myfile);

?>

</body>
</html>