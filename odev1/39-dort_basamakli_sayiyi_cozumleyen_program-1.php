<!doctype html>
<html>
  <head>
  <title>PHP Giriş Dört Basamaklı Sayıyı Çözümleyen Program­-1</title>
</head>
<body>
  <?php
    $a = 6789;
    $b = $a % 10;
    echo $b . " birlik";
    echo "<br>";
    $a -= $b; // $a = $a - $b;
    $b = $a%100;
    echo $b/10 . " onluk";
    echo "<br>";
    $a -= $b; // $a = $a - $b;
    $b = $a % 1000;
    echo $b/100 . " yüzlük";
    echo "<br>";
    $a -= $b; // $a = $a - $b;
    $b = $a%10000;
    echo $b/1000 . " binlik";
  ?>
</body>
</html>
