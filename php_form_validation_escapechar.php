<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

<?php
//define variable and set to empty values
$name = $email = $gender = $comment = $website = "";
//$tips = "";

//检查表单是否使用$_SERVER["REQUEST_METHOD"]进行提交，
//若REQUEST_METHOD是POST，那么表单已被提交，并且对其进行验证；
//若未提交，则跳过验证并显示一个空白表单
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = test_input($_POST["name"]);
	$email = test_input($_POST["email"]);
	$website = test_input($_POST["website"]);
	$comment = test_input($_POST["comment"]);
	$gender = test_input($_POST["gender"]);
//}else {
//	$tips = "Please input something again!";
}

function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>


<h2>PHP validation sample</h2>
<form method="post" action="/php_git_learn/php_form_validation_escapechar.php">
	Name: <input type="text" name="name">
	<br><br>
	Email: <input type="text" name="email">
	<br><br>
	URL: <input type="text" name="website">
	<br><br>
	Comment: <textarea name="comment" rows="5" cols="40"></textarea>
	<br><br>
	Gender:
	<input type="radio" name="gender" value="female">Female
	<input type="radio" name="gender" value="male">Male
	<br><br>
	<input type="submit" name="submit" value="submit">
</form>

<?php
echo "<h2>Your input: </h2>";
//echo $tips;
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>

<!-- 
http://localhost/php_git_learn/php_form_validation_escapechar.php
-->