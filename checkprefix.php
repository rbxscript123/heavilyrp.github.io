<?php
	if (!isset($_COOKIE['logged']))
		echo "<meta http-equiv=\"refresh\" content=\"0; url=checklogpassword.php\">";
?>
<link rel="stylesheet" type="text/css" href="style.css">
<?php
	$array[0] = $_POST['username'];
	$array[1] = $_POST['prefix'];
	if($_POST['username'] !== '') {
		echo "<meta http-equiv=\"refresh\" content=\"0; url=prefixlist.php\">";
		require 'connect.php';
		mysqli_query ($connect,"SET NAMES 'utf8'");
		mysqli_query($connect,"UPDATE `accounts` SET `MyPrefix` = '$array[1]' WHERE `NickName` = '$array[0]'");
	}
	else echo "<meta http-equiv=\"refresh\" content=\"1.5;URL=editprefix.php\" />Ошибка: Введите ник!";
?>
