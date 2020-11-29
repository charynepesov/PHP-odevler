<!doctype html>
<html>
  <head>
  <title>PHP Giriş Boy­-Mesaj</title>
</head>
<body>
  <?php
    $cinsiyet="e";
    $boy=180;
    if($cinsiyet=="k")
    {
      if ($boy<160)
      {
        echo "boyunuz ortalamanın altında.";
      }
      elseif ($boy>160)
        echo "boyunuz ortalamanın üzerinde.";
      else
        echo "boyunuz tam ortalamada.";
     }
     elseif($cinsiyet=="e")
     {
      if ($boy<170)
        echo "boyunuz ortalamanın altında.";
      elseif ($boy>170)
        echo "boyunuz ortalamanın üzerinde.";
      else
        echo "boyunuz tam ortalamada.";
    }
    else
      echo "Cinsiyetinizi kontrol edin";
  ?>
</body>
</html>
