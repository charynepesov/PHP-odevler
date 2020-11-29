<!doctype html>
<html>
  <head>
  <title>PHP Giriş E‐mail Spam Olabilir</title>
</head>
<body>
  <?php
    $konu="Bugünün şanslı insanı sizsiniz";
    if ((strpos ($konu,"kazandınız") <> '') or
    (strpos ($konu,"şanslı") <> '') or
    (strpos ($konu,"1000") <> '') )
      {
        echo "Bu mail muhtemelen bir SPAMMM!!!";
      }
    else
      {
        echo "Güvenli bir mail olabilir";
      }
  ?>
</body>
</html>
