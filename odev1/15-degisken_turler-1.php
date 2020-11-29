<!doctype html>
<html>
  <head>
  <title>PHP Giriş Değişkenler­türler 1</title>
</head>
<body>
  <<h1> Veri Türleri </h1>
  <?php
    $s1="Programlama"; // karakterdizi (string) türünde bir
    değişken
    $i=12; // tamsayı (integer) türünde bir değişken
    $b=TRUE; // Boolean türünde bir değişken
    $a=10.5678; // ondalık türünde bir değişken

    echo gettype($s1);echo "<hr>";
    echo gettype($i);echo "<hr>";
    echo gettype($b);echo "<hr>";
    echo gettype($a);echo "<hr>";
  ?>
</body>
</html>
