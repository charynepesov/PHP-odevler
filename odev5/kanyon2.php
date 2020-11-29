<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Kanyon Document</title>
    </head>
<body>
        <form action="kanyon2.php" method="get">
            <select name="konum">Seçiniz
                <option <? if ($_GET['konum']==0) { ?> selected="selected" <?
                    } ?> value="0">Türkiye</option>
                <option <? if ($_GET['konum']==1) { ?> selected="selected" <?
                    } ?> value="1">ABD</option>
            </select>
            <input name="ulke" type="submit" value="Getir" />
            <?
            if (isset($_GET['ulke']) or isset($_GET['resimgetir']))
            {
                if ($_GET['konum']==0)
                {
                    echo "<select name='secilenkanyon'>Seçiniz";
                    echo "<option value=0>Valla Kanyonu</option>";
                    echo "<option value=1>Köprülü Kanyon</option>";
                    echo "<option value=2>Karacehennem Boğazı</option></select>";
                    echo "<input name=resimgetir type=submit value=Getir2 />";
                }
                if ($_GET['konum']==1)
                {
                    echo "<select name='secilenkanyon'>Seçiniz";
                    echo "<option value=0>Siyah Kanyonu</option>";
                    echo "<option value=1>Hels Kanyon</option></select>";
                    echo "<input name=resimgetir type=submit value=Getir2 />";
                }

            }
            ?>
        </form>
        <?
            if (isset($_GET['resimgetir']))
            {
                if ($_GET['konum']==0)
                {
                    $resim=$_GET['secilenkanyon'];
                    if ($resim==0)
                    {
                        echo "<img src=turkey/Dock.jpg />";
                    }
                    if ($resim==1)
                    {
                        echo "<img src=turkey/forest.jpg />";
                    }
                    if ($resim==2)
                    {
                        echo "<img src=turkey/Creek.jpg />";
                    }
                }
                if ($_GET['konum']==1)
                {
                    $resim=$_GET['secilenkanyon'];
                    if ($resim==0) 
                    {
                        echo "<img src=abd/Tree.jpg />";
                    }                    
                    if ($resim==1)
                    {
                        echo "<img src=abd/Garden.jpg />";
                    }                
                }
            }
        ?>
   </body>
   </html> 