<!doctype html>
<html>
<head>
  <title>Asal Sayi - Odev 2</title>
</head>
<body>

<?php
  $sayi=15;
  $k=$sayi-1;
  $asal=0;
  $asaldegil=0;
  for ($i=2; $i<=$k; $i++)
  {
    $tam=$sayi%$i;
    if ($tam<>0)
    $asal=$asal+1;
    else
    $asaldegil=$asaldegil+1;
  }
  if ($asaldegil==0)
    echo"asal";
  else
    echo"asal değil";

//Kod 2
  echo "<hr>";

  $f=19;
  for ($sayac=($f-1); $sayac>1;$sayac=($sayac-1))
  {
    $k=($f/$sayac);
    if(ceil($k)==$k){
      echo "Asal değildir:..";
      break;
    }
  }
  if(ceil($k)==$k){
  }
  else {
    echo "Asaldır!!!";
  }
?>

</body>
</html>
