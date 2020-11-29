<!doctype html>
<html>
  <head>
    <title>Açının Türünü belirleyen fonksiyon</title>
  </head>
  <body>

    <?php
      function tip($aci)
      {
        switch ($aci) {
          case ($aci>0 && $aci<90):
            return "dar";
            break;
          case ($aci==90):
            return "dik";
            break;
          case ($aci>90 && $aci<180):
            return "geniş";
            break;
          case ($aci==180):
            return "doğru";
            break;
          case ($aci==360):
            return "tam";
            break;
          default:
            return "tanımsız";
            break;
        }
      }

      echo tip(125) . " açı.";
    ?>
  </body>
</html>