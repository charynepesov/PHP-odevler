<!doctype html>
<html>
  <head>
  <title>PHP Giriş Switch... Case (baş harfe göre isim öneren program)</title>
</head>
<body>
  <?php
    $basharf="m";
    $basharf_son=strtoupper($basharf);
    switch ($basharf_son)
    {
    case "A":
      echo"Ayşe";
    break;
    case "B":
      echo"Banu";
    break;
    case "C":
      echo"Canan";
    break;
    case "D":
      echo"Deniz";
    break;
    case "S":
      echo"Selin";
    break;
    case "M":
      echo"Melis";
    break;
    default:
      echo"Bu harf için isim tanımlanmadı ";
    }
  ?>
</body>
</html>
