<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Rastgele -100, 100 arasinda sayi</title>
  </head>
  <body>
  
  <?php
    function sayiuret($a)
    {
      $k = 0;
      $l = 0;
      for($i=1; $i<=$a; $i++)
      {
        $sayi = rand((-100), 100);
        if($sayi<0)
        {
          global $negatif;
          $negatif[$k] = $sayi;
          $k++;
        }
        else
        {
          global $pozitif;
          $pozitif[$l] = $sayi;
          $l++;
        }
      }
    }

    sayiuret(8);

    for($n=0; $n<=count($negatif); $n++)
    {
      echo $negatif[$n]."/";
    }
    for($s=0; $s<=count($pozitif); $s++)
    {
      echo $pozitif[$s]."/";
    }
  ?>
  </body>
</html>