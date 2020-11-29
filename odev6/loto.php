<!doctype html>
<html>
  <head>
  </head>
  <body>
  <?php
    $sayilar = array();

    while (count($sayilar) < 6)
    {
      $yeni = rand(1, 49);

      if (icindeMi($yeni, $sayilar) == false)
      {
        $sayilar[] = $yeni;
      }
    }
    sort($sayilar);
    for($i = 0; $i < count($sayilar); i++)
    {
      echo $sayilar[$i] . " / ";
    }

    function icindeMi($sayi, $dizi)
    {
      for($i = 0; $i < count($dizi); $i++)
      {
        if($dizi[$i] == $sayi)
        {
          return true;
        }
      }
    }
  ?>
  </body>
</html>