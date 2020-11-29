<!doctype html>
<html>
  <head>
  </head>
  <body>
    <form id="form1" name="form1" method="post" action="radio2.php">
      <p>Sayı 1:
        <label>
          <input type="text" name="s1" id="textfield" />
        </label>
      </p>
      <p>Sayı 2:
        <label>
          <input type="text" name="s2" id="textfield2" />
        </label>
      </p>
      <p>
        <label>
          <input type="radio" name="RadioGroup1" value="1" />
          A <sup>b</sup></label>
          <br />
          <label>
            <input type="radio" name="RadioGroup1" value="2" />
          B <sup>a</sup></label><br />
          <label>
            <input type="radio" name="RadioGroup1" value="3" />
          |A<sup>2</sup>- B<sup>b</sup>
        </label>
      </p>
      <p>
        <label>
          <input type="submit" name="hesapla" id="button" value="Hesapla" />
        </label>
        <br />
      </p>
      <label> </label>
    </form>

    <?php
      $sayi1=(int)$_POST['s1'];
      $sayi2=(int)$_POST['s2'];
      $k=$_POST['RadioGroup1'];
      $sonuc=1;

      switch ($k)
      {
        Case 1:
          for ($i=1; $i<=$sayi2; $i++)
            $sonuc= $sonuc * $sayi1;
          echo $sonuc;
          Break;
        Case 2:
          for ($i=1; $i<=$sayi1; $i++)
            $sonuc= $sonuc * $sayi2;
          echo $sonuc;
          Break;
        Case 3:
          $sonuc=($sayi1*$sayi1)-($sayi2*$sayi2);
          if ($sonuc<0)
            $sonuc=$sonuc*(-1);
          echo $sonuc;
          Break;
      }
    ?>
  </body>
</html>