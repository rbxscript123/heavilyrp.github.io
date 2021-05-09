<?php
	if (!isset($_COOKIE['logged']))
		echo "<meta http-equiv=\"refresh\" content=\"0; url=checklogpassword.php\">";
?>
<link rel="stylesheet" type="text/css" href="style.css">
<?php
	$array[0] = $_POST['username'];
	$array[1] = $_POST['lvl'];
	if($_POST['username'] !== '') {
		echo "<meta http-equiv=\"refresh\" content=\"0; url=osnova.php\">";
		require 'connect.php';
		mysqli_query ($connect,"SET NAMES 'utf8'");
		if ($array[1] == 0) {
			mysqli_query($connect,"DELETE FROM admin WHERE name = '$array[0]'");
		} else {
			mysqli_query($connect,"DELETE FROM admin WHERE name = '$array[0]'");
			mysqli_query($connect,"INSERT INTO `admin` (`name`, `level`) VALUES ('$array[0]','$array[1]')");
			mysqli_query($connect,"INSERT INTO `accounts` (`Admin`) VALUES ($array[1]') WHERE `NickName' = '$array[0]'");
		}
	}
	else
		echo "<meta http-equiv=\"refresh\" content=\"1;URL=osnova.php\" />Ошибка: Введите ник!";
?>
