<!doctype html>
<html>
<head>
  <title>Program 1 - Odev 2</title>
</head>
<body>
<?php
  $sayi = 50;
  for($i=1; $i<=$sayi; $i++)
  {
    if($i%2==0)
      echo $i." çift<br>";
    else
      echo $i." tek<br>";
  }
?>

<hr>
<table>
  <tr>
    <td>Tekler</td>
    <td>Çiftler</td>
  </tr>
  <?php
    for($i=1; $i<=$sayi; $i++)
    {
      if($i%2==1)
        echo "<tr><td>".$i."</td>";
      else
        echo "<td>".$i."</td></tr>";
    }
  ?>
</table>

</body>
</html>
