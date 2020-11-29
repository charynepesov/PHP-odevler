<!doctype html>
<html>
<head>
  <title>Program 7 - Odev 2</title>
</head>
<body>

<?php

  $sayi=500;
  while ($sayi>=1)
  {
    for($k=1;$k<=20;$k++)
    {
      echo $sayi;
      if($k!=20)
        echo "-";
      $sayi--;
    }
    echo "<br>";
    $k=0;
  }
?>

</body>
</html>
