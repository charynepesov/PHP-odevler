<!doctype html>
<html>
  <head>
  </head>
  <body>
    <?php
      $gunler = array("Pazartesi", "Sali", "Carsamba", "Persembe", "Cuma", "Cumartesi", "Pazar");
      $renkler = array("Kirmizi",
                        "Yesil",
                        "Mavi",
                        "Beyaz",
                        "Siyah",
                        "Turuncu",
                        "Mor");
      $sayi1 = rand(0, 6);
      $sayi2 = rand(0, 6);

        echo "Uğurlu gününüz: ".$gunler[$sayi1]."<br>".
              "Uğurlu renginiz ise: ".$renkler[$sayi2];
     
    ?>
  </body>
</html>