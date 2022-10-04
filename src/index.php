<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <?php
  $nama = $_GET['name'];
  echo "Username Anda Adalah <b>$nama</b>";

  ?> <br>
  <?php
  $pass = $_GET['pass'];
  echo "Password Anda Adalah <b>$pass</b>"; ?>


</body>

</html>