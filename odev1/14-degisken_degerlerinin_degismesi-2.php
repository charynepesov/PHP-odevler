<!doctype html>
<html>
  <head>
  <title>PHP Giriş Değişken değerlerinin Değişmesi­-2</title>
</head>
<body>
  <?php
    $sayi1 = 4;
    $sayi2 = 10;
    $sayi2=$sayi1+$sayi2;
    $sayi1=$sayi2-$sayi1;
    $sayi2=$sayi2-$sayi1;
    echo "Sayı1: $sayi1 Sayı2: $sayi2";
  ?>
</body>
</html>
