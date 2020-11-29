<!doctype html>
<html>
  <head>
  <title>PHP Giriş String değişkenlerin birleştirilme yöntemleri</title>
</head>
<body>
  <?php
    $a = "Merhaba " . "Dünya!";
    echo "$a<br>";

    $a = "Merhaba ";
    $b = "Dünya ";
    $a = $a . $b;
    echo "$a<br>";
    
    $a = "Merhaba ";
    $a = $a . "Dünya!";
    echo "$a<br>";

    $a = "Merhaba ";
    $a .= "Dünya!";
    echo "$a";
  ?>
</body>
</html>
