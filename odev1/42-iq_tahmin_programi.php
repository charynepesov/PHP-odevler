<!doctype html>
<html>
  <head>
  <title>PHP Giriş Kişinin IQ, EQ ve Zekasına Göre Başarısını Tahmin Eden Program</title>
</head>
<body>
  <?php
    $iq=1;
    $eq=0;
    $zeka=$iq+$eq;
    $calisma=1;
    $basari=$calisma+$zeka;
    switch ($basari)
    {
    Case 0;
      echo "başarısız";
    Break;
    Case 1;
      echo "orta";
    Break;
    Case 2;
      echo "başarılı";
    Break;
    Case 3;
      echo "mükemmel";
    Break;
    }
  ?>
</body>
</html>
