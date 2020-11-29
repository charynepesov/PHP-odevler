<!doctype html>
<html>
<head>
  <title>Program 5 - Odev 2</title>
</head>
<body>

<?php
  for($i=1; $i<=7; $i++)
  {
    print("<font size=$i>");
    echo "PHP Öğreniyorum!";
    print("</font></br>");
  }  



  $font = 1;

  while($font <= 7)
  {
     echo "<p style='font-size:1.$font"."em;'>PHP Öğreniyorum!</p>"; 
  
    $font++;
  }
?>

</body>
</html>
