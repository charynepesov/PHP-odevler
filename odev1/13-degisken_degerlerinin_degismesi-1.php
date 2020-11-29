<!doctype html>
<html>
  <head>
  <title>PHP Giriş Değişken değerlerinin Değişmesi­-1</title>
</head>
<body>
  <?php
    $sayi1 = 4;
    $sayi2 = 10;
    $sayi3=$sayi1;
    $sayi1=$sayi2;
    $sayi2=$sayi3;
    echo "Sayı1: $sayi1 Sayı2: $sayi2";
  ?>
</body>
</html>
