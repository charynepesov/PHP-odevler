<!doctype html>
<html>
  <head>
  </head>
  <body>
    <form action="yas.php" method="post"> 
      <p> Adınız: <input type="text" name="name"></p>
      <p> Dogum Yiliniz: <input type="text" name="d"></p>
      <p><input type="submit"></p> 
    </form> 
    <?php 
      echo $_POST["name"]; 
      echo "<br>"; 
      echo date("Y")-(int)$_POST["d"];
    ?> 
  </body>
</html>