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
<a href="glosnova.php" class="btn"><< Вернуться</a>
<form name="zaprosform" action="/checksql.php" method="POST"><br>
  <input type="text" name="zapros" size="30px" placeholder="Запрос">
	<input type="submit" name="done" placeholder="Готово" height="100px" value="   Готово   "><br>
</form>
