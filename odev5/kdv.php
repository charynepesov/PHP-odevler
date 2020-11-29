<!doctype html>
<html>
  <head>
  </head>
  <body>
    <form id="form1" name="form1" method="post" action=""> 
      <select name="urun" id="select"> 
        <option value="25">Bilgisayar</option> 
        <option value="15">Sarf malzemesi</option> 
        <option value="8">Kırtasiye</option> 
      </select> 
      <p> Ürün fiyatını giriniz: <input type="text" name="fiyat"></p> 
    </form> 
    <?php 
      $kdv= $_POST["urun"]; 
      $fiyat= $_POST["fiyat"]; 
      $son_fiyat= $fiyat*$kdv/100; 
      echo $son_fiyat;
    ?> 
  </body>
</html>