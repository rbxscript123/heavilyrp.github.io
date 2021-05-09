<?php
	if (!isset($_COOKIE['logged']))
		echo "<meta http-equiv=\"refresh\" content=\"0; url=checklogpassword.php\">";
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
   hr {
    border: none; /* Убираем границу */
    background-color: red; /* Цвет линии */
    color: red; /* Цвет линии для IE6-7 */
    height: 2px; /* Толщина линии */
   }
   .block2 {
    width: 200px;
    background: #fc0;
    padding: 5px;
    border: solid 1px black;
    float: left;
    position: relative;
    top: 40px;
    left: -70px;
   }
   .fontsize {
     font-size: 16px;
   }
  </style>
  <a href="index1.php" class="btn">Заходы/выходы</a>
  <a href="index2.php" class="btn">Админ-чат</a>
  <a href="index3.php" class="btn">Остальное</a>
  <a href="index4.php" class="btn">Весь чат</a>
  <a href="index5.php" class="btn">Наказания</a>
  <a href="index6.php" class="btn">Убийства</a>
  <a href="index8.php" class="btn">Все команды</a>
  <a href="index7.php" class="btn">Изменения статистики</a>
  <a href="banlist.php" class="btn">Банлист</a>
  <a href="checkosnova.php" class="btn">Раздел основателя(8 lvl)</a>
<hr>
<?php
	require("connect.php");
	$select = mysqli_query($connect,"SELECT * FROM bannames ORDER BY BanDate");
		echo " Дата блокировки &emsp; &emsp;Дата разбана &emsp; &emsp; &emsp;&emsp;Админ &emsp; &emsp; &emsp; &emsp; &emsp; Забаненный &emsp; &emsp; &ensp; &emsp;&emsp;Причина<br><br>";
		while($result = mysqli_fetch_array($select)) {
      echo
				"<table border=\"0\" class=\"fontsize\">
					<td width=\"150\">$result[BanDate]</td>"."
					<td width=\"150\"> ".date("Y-m-d H:m:i", $result[BanSeconds])."
				  <td width=\"150\">&ensp;$result[BanAdmin]</td>
			    <td width=\"150\">&ensp;$result[Name]</td>
			    <td width=\"300\">&emsp;&ensp;$result[BanReason]</td></table><br>";
		}
		for ($i=0; $i < 20; $i++) {
			echo "<br />";
		}
?>
