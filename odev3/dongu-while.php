<!doctype html>
<html>
<head>
  <title>Donguler Asal Sayi - Odev 2</title>
</head>
<body>

<?php
  $a=18;
  while($a<>1)
  {
    if($a%2==0)
    {
      $a=$a/2;
      echo $a."<br>";      
    }
    else
    {
      $a=($a*3)+1;
      echo $a."<br>";          
    }
  }
  echo "4<br>2<br>1<br>...";
?>

</body>
</html>
