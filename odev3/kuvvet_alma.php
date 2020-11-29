<!doctype html>
<html>
<head>
  <title>Kuvvet Alma - Odev 2</title>
</head>
<body>

<?php
  $sayi=2;
  $kuvvet=4;
  $sonuc=1;
  for ($i=1; $i<= $kuvvet; $i++)
  {
    $sonuc= $sonuc * $sayi;
    $dizi[$i]= $sonuc;
    echo $dizi[$i];
    echo "<br>";
  }
?>

</body>
</html>
