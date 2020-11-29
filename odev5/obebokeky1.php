<!doctype html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
    <title>Untitled Document</title> 
  </head>
  <body>
  <form action="" method="get"> 
    1.Sayıyı Giriniz..:<input name="s1" type="text" /><br /> 
    2.Sayıyı Giriniz..:<input name="s2" type="text" /> &nbsp; 
    &nbsp;<input name="h" type="submit" value="Hesapla" />
  </form> 
  <?php
    $ebob = 0;
    $ekok = 0;

    if (isset($_GET['h'])) 
    { 
      //Ebob için   
      $s1=$_GET['s1']; 
      $s2=$_GET['s2'];     
      //*********    
      //Ekok İçin 
      $s11=$_GET['s1']; 
      $s22=$_GET['s2'];    
      //**** 
      //Ebob Çarpanları.... 
      $e=1;  
      if($s1=="" or $s2==""){echo "Lütfen Sayı Giriniz"; exit;} 
      if ($s1>$s2){$sayi=$s1;} else {$sayi=$s2;} 
      $x=1; 
      for ($i=2;$i<=$sayi;$i++) 
      { 
        while ($s1 % $i==0 and $s2 % $i==0) 
          { 
            //$sayi=$sayi/$i; 
            $s1=$s1/$i; 
            $s2=$s2/$i; 
            $ebob=$ebob.$i."x"; 
            $x=$x*$i;        
          }  
      }    
      //************************  
      //Ekok Çarpanları.... 
      for ($i=2;$i<=$sayi;$i++) 
      { 
        while ($s11 % $i==0 or $s22 % $i==0) 
        { 
          if ($s11 % $i ==0) 
          { 
            $s11=$s11/$i; 
          } 
          if ($s22 % $i ==0)
          { 
            $s22=$s22/$i; 
          }          
          $ekok=$ekok.$i."x"; 
          $e=$e*$i;       
        }      
      }      
      //******************      
      echo "Ebob Çarpanları....:".substr($ebob,0,strlen($ebob)-1); 
      echo "<br />En büyük ortak böleni...:".$x; 
      echo "<br>"; 
      echo "Ekok Çarpanları....:".substr($ekok,0,strlen($ekok)-1); 
      echo "<br>"; 
      echo "Ekok ....:".$e; 
    }  
  ?>
  </body>
</html>