<!doctype html>
<html>
  <head>
  </head>
  <body>
    <h2>Yazi mi, tura mi sizce</h2>
    <form type="GET">
      <select name="tahmin">
        <option value="1">Yazi-1</option>
        <option value="2">Tura-2</option>
      </select>
      <input type="submit" name="buton" value="Hadi bakalim"><br>
    </form>
    <?php
      if (isset($_GET['buton']))
      {
        $sayi = rand(1, 2);
        echo $sayi."<br>";
        $tahmin = $_GET['tahmin'];
        if ($tahmin == $sayi)
          echo "Bildiniz.";
        else
          echo "Bilemediniz.";        
      }
    ?>
  </body>
</html>