<!doctype html>
<html>
  <head>
  <title>PHP Giriş Girilen Üç Sayıyı Küçükten Büyüğe Sıralayan Program</title>
</head>
<body>
  <?php
    $a=120;
    $b=100;
    $c=500;

    if ($a>$b)
    {
      $eb=$a;
      $ek=$b;
    }
    else
    {
      $eb=$b;
      $ek=$a;
    }
    if ($c<$ek)
    {
      $orta=$ek;
      $ek=$c;
    }
    elseif ($c>$eb)
    {
      $orta=$eb;
      $eb=$c;
    }
    else
      $orta=$c;
    echo "$ek ,$orta ,$eb";
  ?>
</body>
</html>
