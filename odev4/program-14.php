<!doctype html>
<html>
<head>
  <title>Program 14 - Odev 3</title>
</head>
<body>
<?php
  $kalinSesler = array("A","I","O","U");
  $inceSesler = array("E","İ","Ö","Ü");
  $isim = "Fatma";

  $isim = strtoupper($isim);
  $kalin = 0;
  $ince = 0;

  for ($i=0; $i < strlen($isim); $i++) { 
      $harf = substr($isim, $i, 1);
      for ($j=0; $j < count($kalinSesler); $j++) { 
          if ($harf == $kalinSesler[$j])
            $kalin++;
      }

      for ($j=0; $j < count($inceSesler); $j++) { 
          if ($harf == $inceSesler[$j])
              $ince++;
      }
  }

  if (($kalin <> 0) and ($ince <> 0))
    echo "Bu isim büyük ünlü uyumuna uymaz";
  else
    echo "Bu isim büyük ünlü uyumuna uyar";
?>
</body>
</html>
