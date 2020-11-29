<!doctype html>
<html>
<head>
  <title>Program 13 - Odev 3</title>
</head>
<body>
<?php
  $ogrenciler = array(
      array("adi" => "Ali", "yasi" => 18, "okul" => "teknik lise"),
      array("adi" => "Ayse", "yasi" => 25, "okul" => "anadolu lisesi"),
      array("adi" => "Zeynep", "yasi" => 20, "okul" => "duz lise")
  );

  for ($i=0; $i < count($ogrenciler); $i++) { 
      print $ogrenciler[$i]["adi"] . "-";
      print $ogrenciler[$i]["yasi"] . "-";
      print $ogrenciler[$i]["okul"] . "<br>";
  }
?>
</body>
</html>
