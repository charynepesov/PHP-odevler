<!doctype html>
<html>
<head>
  <title>Formlarla Çalışmak - Odev 3</title>
</head>
<body>
  <form action="gonder_get.php" method="GET">
    Ad Soyad: <input type="text" name="name">
    <br>
    E-posta: <input type="email" name="email">
    <br>
    <input type="submit" value="Gönder">
    <input type="reset" value="Bilgileri Sil">
  </form>
  <?php
    echo ($_GET["name"] . "<br>" . $_GET["email"]);
  ?>
</body>
</html>
