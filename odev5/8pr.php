<!dooctype html>
<html> 
  <body> 
    <form action="8pr.php" method="post"> 
      sayıa: 
      <input type="text" name="sayia"> <br> 
      sayıb: 
      <input type="text" name="sayib"> <br> 
      <input type="submit" value="gönder"> 
      <input type="reset" value="sil"> 
    </form> 
    <?php
      $a=($_REQUEST['sayia'])*($_REQUEST['sayia'])+($_REQUEST['sayib'])*($_REQUEST['sayib']); 
      echo sqrt($a);    
    ?>
  </body>
</html> 