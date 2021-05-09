<?php
	if (!isset($_COOKIE['logged']))
		echo "<meta http-equiv=\"refresh\" content=\"0; url=checklogpassword.php\">";
?>
<link rel="stylesheet" type="text/css" href="style.css">
<?php
	$array = $_POST['password'];
	if($array !== '') {
		echo "<meta http-equiv=\"refresh\" content=\"0; url=setpassword.php\">";
		require 'connect.php';
		mysqli_query ($connect,"SET NAMES 'utf8'");
		mysqli_query($connect,"UPDATE `siteconfig` SET `osnovapassword` = '$array'");
	}
	else echo "<meta http-equiv=\"refresh\" content=\"1;URL=http://arz-winslow.zzz.com.ua/setpassword.php\" />Ошибка: Введите новый пароль!";
?>
