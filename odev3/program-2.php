<!doctype html>
<html>
<head>
  <title>Program 2 - Odev 2</title>
</head>
<body>

<?php
/*1 ile 1000 arasindaki sayilarin tamkare olanlarinin listelenmesi*/
  for($sayi=1; $sayi<=1000; $sayi++)
  {
    if(floor(sqrt($sayi))==sqrt($sayi))
    {
      echo $sayi."-".sqrt($sayi)."<br>";
    }
  }

echo "<hr>";

//while dongusu ile

  $sayi=1;
  while($sayi <= 1000)
  {
    if(floor(sqrt($sayi))==sqrt($sayi))
    {
      echo $sayi."-".sqrt($sayi)."<br>";
    }
    $sayi++;
  }
?>

</body>
</html>
