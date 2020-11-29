<!doctype html>
<html>
<head>
  <title>Program 11 - Odev 2</title>
</head>
<body>

<?php
  $sayilar=array(7,3,56,89,0,34,120,700,5,6);
  for($i=0; $i<=9; $i++)
  {
    for($k=1; $k<10; $k++)
    {
      if($sayilar[$i]<$sayilar[$k])
      {
        $sakla=$sayilar[$i];
        $sayilar[$i]=$sayilar[$k];
        $sayilar[$k]=$sakla;
      }
    }
  }
  for($i=0;$i<10;$i++)
  {
    echo $sayilar[$i]. "<br>";
  }
?>

</body>
</html>
