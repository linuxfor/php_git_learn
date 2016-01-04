<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php
//define variable and set to empty values
$name = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $genderErr = $websiteErr = "";
//$tips = "";

//检查表单是否使用$_SERVER["REQUEST_METHOD"]进行提交，
//若REQUEST_METHOD是POST，那么表单已被提交，并且对其进行验证；
//若未提交，则跳过验证并显示一个空白表单
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["name"])) {
		$nameErr = "姓名是必填的";
	} else {
		$name = test_input($_POST["name"]);
		//检查姓名是否包含字母和空白字符
		if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
			$nameErr = "只允许字母和空格";
		}
	}

	if (empty($_POST["email"])) {
		$emailErr = "邮箱地址是必填的";
	} else {
		$email = test_input($_POST["email"]);
		if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
			$emailErr = "无效的邮箱地址格式";
		}
	}

	if (empty($_POST["website"])) {
		$website = "";
	} else {
		$website = test_input($_POST["website"]);
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
			$websiteErr = "无效的URL";
		}
	}

	if (empty($_POST["comment"])) {
		$comment = "";
	} else {
		$comment = test_input($_POST["comment"]);
	}

	if (empty($_POST["gender"])) {
		$genderErr = "性别是必选的";
	} else {
		$gender = test_input($_POST["gender"]);
	}

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
<p><span class="error">* 必需的字段</span></p>
<form method="post" action="/php_git_learn/php_form_validation_escapechar.php">
	Name: <input type="text" name="name">
	<span class="error">* <?php echo $nameErr; ?></span>
	<br><br>
	Email: <input type="text" name="email">
	<span class="error">* <?php echo $emailErr; ?></span>
	<br><br>
	URL: <input type="text" name="website">
	<span class="error">* <?php echo $websiteErr; ?></span>
	<br><br>
	Comment: <textarea name="comment" rows="5" cols="40"></textarea>
	<br><br>
	Gender:
	<input type="radio" name="gender" value="female">Female
	<input type="radio" name="gender" value="male">Male
	<span class="error">* <?php echo $genderErr; ?></span>
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