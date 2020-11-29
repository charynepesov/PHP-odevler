<!doctype html>
<html>
<head>
  <title>Program 4 - Odev 2</title>
</head>
<body>

<?php
  $yas = 24.4;

  if($yas < 18)
  {
    echo "Yas: ", ceil($yas);
  }
  else if($yas >= 18 && $yas <=30)
  {
    echo "Yas: ", round($yas);
  }
  else
  {
    echo "Yas: ", floor($yas);
  }
?>

</body>
</html>
