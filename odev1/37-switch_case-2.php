<!doctype html>
<html>
  <head>
  <title>PHP Giriş Switch... Case (anne ve baba göz rengine göre çocuğun göz rengine ilişkin
bilgi veren program)</title>
</head>
<body>
  <?php
    $anne=0;
    $baba=0;
    switch ($anne)
    {
    Case 1:
    if ($baba==0)
      echo "%50";
    else
      echo "çok yüksek";
    Break;
    Case 0:
    if ($baba==1)
      echo "%50";
    else
      echo "çok düşük";
    Break;
    }
  ?>
</body>
</html>
