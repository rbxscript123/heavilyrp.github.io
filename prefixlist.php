<?php
	if (!isset($_COOKIE['logged']))
		echo "<meta http-equiv=\"refresh\" content=\"0; url=checklogpassword.php\">";
?>
<?php
	if (!isset($_COOKIE['code']))
		echo "<meta http-equiv=\"refresh\" content=\"0; url=index1.php\">";
?>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
  .btn {
    display: inline-block; /* Строчно-блочный элемент */
    background: #2dcbff; /* Цвет фона */
    color: #fff; /* Белый цвет текста */
    padding: 0.5rem 0.75rem; /* Поля вокруг текста */
    text-decoration: none; /* Убираем подчёркивание */
    border-radius: 3px; /* Скругляем уголки */
    font-size: 15px; /* Размер текста */
  }
</style>
<a href="index1.php" class="btn">Выйти из панели основателя</a>
<a href="editprefix.php" class="btn">Редактирование</a>
<a href="glosnova.php" class="btn"> << Вернуться</a><br><br>
<?php
  require 'connect.php';
  mysqli_query ($connect,"SET NAMES 'utf8'");
  $select = mysqli_query($connect,"SELECT * FROM `accounts` WHERE `MyPrefix` != ''");
  while($result = mysqli_fetch_array($select))
		echo "НикНейм: &emsp; $result[NickName]<br />Должность: &ensp;$result[MyPrefix]<hr align=\"left\" width=\"15%\" size=\"2\" color=\"#2dcbff\" />";
?>
