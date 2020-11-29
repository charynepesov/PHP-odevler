<!doctype html>
<html>
  <head>
    <title>Tablo Çizen Fonksiyon</title>
    <style>
      table, tr, td {
        border: 1px solid black;
      }
    </style>
  </head>
  <body>
    
    <?php
      function tablociz($satir, $sutun)
      {
        echo "<table>";
        for($i=1; $i<$satir; $i++)
        {
          echo "<tr>";
          for($j=1; $j<=$sutun; $j++)
          {
            echo "<td>Sutun</td>";
          }
          echo "</tr>";
        }
        echo "</table>";
      }

      tablociz(5, 5);
    ?>
  </body>
</html>