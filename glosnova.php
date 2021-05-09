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
<a href="osnova.php" class="btn">Список администраторов</a>
<a href="prefixlist.php" class="btn">Выдача должностей (префиксов)</a>
<a href="setpassword.php" class="btn">Установка пароля для панели</a>
<a href="gosql.php" class="btn">Отправка SQL запроса в базу(делай только если умеешь!)</a>
