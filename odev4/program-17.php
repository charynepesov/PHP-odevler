<!doctype html>
<html>
<head>
  <title>Program 17 - Odev 3</title>
</head>
<body>
  <table border="2">
    <tr><td>3 ile tam bölünen sayılar (30-80)</td></tr>
    <?php
      for ($a=30; $a <= 80; $a++) { 
        if ($a%3 == 0) {
          if ($a%2 == 0) {
            echo "<tr align=center bgcolor=white><td>$a</td</tr>";
          }
          else {
            echo "<tr align=center bgcolor=blue><td>$a</td></tr>";
          }
        }
      }
    ?>
  </table>
</body>
</html>
