<!doctype html>
<html>
<head>
  <title>Program 15 - Odev 3</title>
</head>
<body>
<?php
  $isimler=array(
    array("adi"=>"Ali", "yil"=>1950, "yer"=>"Kütüphane"),
    array("adi"=>"Hasan", "yil"=>1950, "yer"=>"Kütüphane"),
    array("adi"=>"Ayşe", "yil"=>1970, "yer"=>"Öğrenci işler"),
    array("adi"=>"Fulya", "yil"=>1980, "yer"=>"Mediko")
    );
    
  echo "<br>";
  for($i=0; $i <= count($isimler)-1; $i++) {
    if ($isimler[$i]["yil"]==1950 && $isimler[$i]["yer"]=="Kütüphane") {
      echo $isimler[$i]["adi"] . " - " . $isimler[$i]["yil"] . " - " . $isimler[$i]["yer"];
      echo "<br>";
    }
  } 
?>
</body>
</html>
