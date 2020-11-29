<!doctype html>
<html>
  <head>
  <title>PHP Giriş If .... Elseif ..... Else</title>
</head>
<body>
  <?php
    $s=0;
    if ($s>1)
    {
    echo $s;
    echo "<br>";
    echo "1'den büyük";
    }
    Elseif ($s==1)
    {
    echo $s;
    echo "<br>";
    echo "1";
    }
    else
    {
    echo $s;
    echo "<br>";
    echo "1'den küçük";
    }
    echo "<br>Bunun eğer fonksiyonu ile ilgisi yok";
  ?>
</body>
</html>
