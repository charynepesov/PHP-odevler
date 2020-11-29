<!doctype html>
<html>
  <head>
  <title>PHP Giriş Burs­-örneği</title>
</head>
<body>
  <?php
    $c = 'Erkek'; //cinsiyet
    $u = 'Gazi';
    $o = 85;
    $a = 'Çalışmıyor';
    if ( ($u == 'Gazi') && ($o >= 80) && ($a == 'Çalışmıyor'))
    {
      if ($c == 'Kız')
      {
        echo "Bursu ver";
      }
      else
      {
        echo "Bursu ver ";
      }
    }else {
      echo "Gerekli özellikleri taşımıyorsunuz";
    }
  ?>
</body>
</html>
