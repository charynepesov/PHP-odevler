<!doctype html>
<html>
  <head>
  <title>PHP Giriş Not Dağılımı</title>
</head>
<body>
  <?php
    $not=45;
    if ($not<21)
    {
    echo $not;
    echo "<br>";
    echo "Harf Notunuz EE'dir";
    }
    elseif ($not<41)
    {
    echo $not;
    echo "<br>";
    echo "Harf Notunuz DD'dir";
    }
    elseif ($not<61)
    {
    echo $not;
    echo "<br>";
    echo "Harf Notunuz CC'dir";
    }
    elseif ($not<81)
    {
    echo $not;
    echo "<br>";
    echo "Harf Notunuz BB'dir";
    }    
    elseif ($not<101)
    {
    echo $not;
    echo "<br>";
    echo "Harf Notunuz AA'dir";
    }
    else
    echo "Sınav Notunuz 100 den büyük olamaz";
  ?>
</body>
</html>
