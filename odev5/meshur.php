<!doctype html>
<html>
  <head>
  </head>
  <body>
  <form id="form1" name="form1" method="post" action="">
    <select name="sehirler" id="select">
      <option value="0">Adana</option>
      <option value="1">Afyon</option>
      <option value="2">Çorum</option>
      <option value="3">Erzincan</option>
      <option value="4">Kocaeli</option>
      <option value="5">Niğde</option>
      <option value="6">Trabzon</option>
    </select>
    <input type="submit" name="goster" value="Meşhur ürünü Göster"></p>
  </form>
  </body>
</html>
<?php
  if (isset ($_POST['goster']))
  {
    $k=$_POST['sehirler'];
    switch ($k)
    {
      Case 0:
        echo "Pamuk.";
      Break;
      Case 1:
        echo "Haşhaş";
      Break;
      Case 2:
        echo "Leblebi";
      Break;
      Case 3:
        echo "Tulum Peyniri";
      Break;
      Case 4:
        echo "Pişmaniye";
      Break;
      Case 5:
        echo "Elma";
      Break;
      Case 6:
        echo "Akçaabat Köftesi";
      Break;
    }
  }
?> 