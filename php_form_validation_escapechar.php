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

//�����Ƿ�ʹ��$_SERVER["REQUEST_METHOD"]�����ύ��
//��REQUEST_METHOD��POST����ô���ѱ��ύ�����Ҷ��������֤��
//��δ�ύ����������֤����ʾһ���հױ�
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["name"])) {
		$nameErr = "�����Ǳ����";
	} else {
		$name = test_input($_POST["name"]);
		//��������Ƿ������ĸ�Ϳհ��ַ�
		if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
			$nameErr = "ֻ������ĸ�Ϳո�";
		}
	}

	if (empty($_POST["email"])) {
		$emailErr = "�����ַ�Ǳ����";
	} else {
		$email = test_input($_POST["email"]);
		if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
			$emailErr = "��Ч�������ַ��ʽ";
		}
	}

	if (empty($_POST["website"])) {
		$website = "";
	} else {
		$website = test_input($_POST["website"]);
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
			$websiteErr = "��Ч��URL";
		}
	}

	if (empty($_POST["comment"])) {
		$comment = "";
	} else {
		$comment = test_input($_POST["comment"]);
	}

	if (empty($_POST["gender"])) {
		$genderErr = "�Ա��Ǳ�ѡ��";
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
<p><span class="error">* ������ֶ�</span></p>
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