<!doctype html>
<html>
  <head>
  <title>PHP Giriş String ve integer değişkenlerin dönüşümü</title>
</head>
<body>
  <?php
    $a = 5;
    echo "$a<br>";
    echo gettype($a);
    echo "<br>";
    $a = $a."5";
    echo "$a<br>";
    echo gettype($a);
    echo "<br>";
    $a=$a*5;
    echo "$a<br>";
    echo gettype($a);
    echo "<br>";
  ?>
</body>
</html>
