<link rel="stylesheet" type="text/css" href="style.css">
<?php
	if (!isset($_COOKIE['logged']))
		echo "<meta http-equiv=\"refresh\" content=\"0; url=checklogpassword.php\">";
	if (!isset($_COOKIE['code']))
		echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php\">";
require 'connect.php';
$zapros = $_POST['zapros'];
if ($zapros == '')
  echo "<meta http-equiv=\"refresh\" content=\"1;gosql.php\" />Ошибка: Введите запрос!";
else {
  mysqli_query($connect,$zapros);
  echo "<meta http-equiv=\"refresh\" content=\"0;URL=gosql.php\"";
}
for ($i=0; $i < 50; $i++) {
  echo "<br>";
}
?>
