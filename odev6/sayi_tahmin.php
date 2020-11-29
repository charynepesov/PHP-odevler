<!doctype html>
<html>
  <head>
  </head>
  <body>
    <form method="POST">
      <p>
        0-100 arasında bır sayı tuttum. Tahmininiz:
      </p>
      <input type="text" name="gizli">
      <input type="submit" value="TAHMIN ET!">
    </form>

    <?php
      if(!isset($_POST['gizli']))
      {
        $sayi = rand(1, 100);
      }
      else
      {
        $sayi = $_POST['gizli'];
      }
      echo "Tahminiz doğru! - " . $sayi;
    ?>
  </body>
</html>