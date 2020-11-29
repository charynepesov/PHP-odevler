<!doctype html>
<html>
<head>
  <title>Program 16 - Odev 3</title>
</head>
<body>
<?php
  $gazi = array(
    array("fakulte"=>"Gazi Eğitim Fakültesi", "dekan"=>"Prof.Dr. Mustafa Safran", "ogrenci"=>10000, "ogretim_elemani"=>450),
    array("fakulte"=>"Mesleki Eğitim Fakültesi", "dekan"=>"Prof.Dr. Fatma Alisinanoğlu", "ogrenci"=>5600, "ogretim_elemani"=>240),
    array("fakulte"=>"Tıp Fakültesi", "dekan"=>"Prof.Dr. Peyami CİNAZ", "ogrenci"=>1200, "ogretim_elemani"=>240),
    array("fakulte"=>"İİBF", "dekan"=>"Prof.Dr. Kadir ARICI", "ogrenci"=>860, "ogretim_elemani"=>90)
  );
  $top_ogr = 0;
  $top_hoca = 0;
  for ($i=0; $i < count($gazi); $i++) { 
    $top_ogr = $top_ogr + $gazi[$i]["ogrenci"];
    $top_hoca = $top_hoca + $gazi[$i]["ogretim_elemani"];
  }
  echo $top_ogr;
  print "<br>";
  echo $top_hoca;

  //b
  echo "<table><tr><td>Fakülte</td><td>Dekan Adı</td><td>Öğretim Elemanı Başına Düşen Öğrenci Sayısı</td></tr>";
  for ($i=0; $i < count($gazi); $i++) { 
    echo "<tr><td>";
    echo $gazi[$i]['fakulte'];
    echo "</td><td>";
    echo $gazi[$i]['dekan'];
    echo "</td><td>";
    echo $gazi[$i]['ogrenci'];
    echo "</td></tr>";
  }
  echo "</table>";
?>
</body>
</html>
