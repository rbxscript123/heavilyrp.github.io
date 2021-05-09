<link rel="stylesheet" type="text/css" href="cssindex.css">
<?php
$pass = $_POST['password'];
require 'connect.php';
$select = mysqli_query($connect,"SELECT * FROM `siteconfig`");
while($result = mysqli_fetch_array($select)) {
  if ($pass == $result[logpassword]) {
    setcookie("logged", 1, time() + 1800);
    echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php\">";
  }
  else {
    echo "<meta http-equiv=\"refresh\" content=\"0.5; url=checklogpassword.php\">";
  }
}
?>
