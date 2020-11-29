<!doctype html>
<html> 
  <head> 
  </head> 
  <body> 
    <form  name="form1" method="post" action="post5.php"> 
      <select name="liste" id="select"> 
        <option value="0">Bayan</option> 
        <option value="1">Erkek</option> 
      </select>    
      <input type="submit" name="gonder" value="gonder" /> 
    </form> 
    <br /> 
    <?php  
      $cinsiyet = $_POST["liste"];      
      switch ($cinsiyet) 
      { 
        Case 0: 
          echo "Bayan"; 
          Break; 
        Case 1: 
          echo "Erkek"; 
          Break; 
      }    
    ?>  
  </body> 
</html> 