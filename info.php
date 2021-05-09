<?php
	if (!isset($_COOKIE['logged']))
		echo "<meta http-equiv=\"refresh\" content=\"0; url=checklogpassword.php\">";
?>
<link rel="stylesheet" type="text/css" href="cssindex.css">
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
   hr {
    border: none; /* Убираем границу */
    background-color: red; /* Цвет линии */
    color: red; /* Цвет линии для IE6-7 */
    height: 2px; /* Толщина линии */
   }
   #right { text-align: right; }
   #h2red { color: red; }
  </style>
<a href="index1.php" class="btn">Заходы/выходы</a>
<a href="index2.php" class="btn">Админ-чат</a>
<a href="index3.php" class="btn">Остальное</a>
<a href="index4.php" class="btn">Весь чат</a>
<a href="index5.php" class="btn">Наказания</a>
<a href="index6.php" class="btn">Убийства</a>
<a href="index7.php" class="btn">Изменения статистики</a>
<a href="info.php" class="btn">Информационная</a>
<a href="banlist.php" class="btn">Банлист</a>
<hr>
<?php
  echo "<br />Приветствую. Здесь ты сможешь найти некоторую информацию которой нет на форуме. А так-же, здесь будут написаны все обновления логов.<br />";
?>
<?php
  for ($i=0; $i < 100; $i++) {
    echo "<br />";
  }
?>
