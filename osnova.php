<?php
	if (!isset($_COOKIE['logged']))
		echo "<meta http-equiv=\"refresh\" content=\"0; url=checklogpassword.php\">";
?>
<?php
	if (!isset($_COOKIE['code']))
		echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php\">";
?>
<link rel="stylesheet" type="text/css" href="style.css">
<a href="glosnova.php" class="btn"> << Вернуться</a><br><br>
<?php
	require 'connect.php';
	mysqli_query ($connect,"SET NAMES 'utf8'");
	$select = mysqli_query($connect,"SELECT * FROM `admin`");
	echo "Лвл&emsp;&emsp;Ник<br><br>";
	while($result = mysqli_fetch_array($select))
	{
		echo "
	    &ensp;$result[level]
	    &ensp;&emsp;&emsp;$result[name]<br>";
	}
?>
<form name="test" action="/check.php" method="POST"><br>
	<label>Ник:</label><br>
	<input type="text" name="username"><br>
	<label>Лвл:</label><br>
	<select name="lvl">
		<option value="0" selected>Снять(0)</option>
		<option value="1">1 уровень</option>
		<option value="2">2 уровень</option>
		<option value="3">3 уровень</option>
		<option value="4">4 уровень</option>
		<option value="5">5 уровень</option>
		<option value="6">6 уровень</option>
		<option value="7">7 уровень</option>
		<option value="8">8 уровень</option>
	</select>
	<input type="submit" name="done" placeholder="Готово"><br>
</form>
<style type="text/css">
   .checkname {
    width: 163px;
    background: #fd397a;
    padding: 5px;
    border: solid 2px black;
    float: left;
    position: relative;
    top: -90px;
    left: -320px;
   }
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
