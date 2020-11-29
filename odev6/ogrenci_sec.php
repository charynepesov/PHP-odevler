<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Choose student</title>
  </head>
  <body>

    <?php
      $students = array(
        array('name'=>'Ali', 'age'=>18, 'mark'=>95),
        array('name'=>'Ayşe', 'age'=>19, 'mark'=>90),
        array('name'=>'Zeynep', 'age'=>20, 'mark'=>80),
        array('name'=>'Ahmet', 'age'=>21, 'mark'=>100),
        array('name'=>'Mehmet', 'age'=>22, 'mark'=>75),
        array('name'=>'Sema', 'age'=>23, 'mark'=>80),
        array('name'=>'Serdar', 'age'=>24, 'mark'=>85),
        array('name'=>'Chary', 'age'=>25, 'mark'=>90),
      );
/*function to get students randomly */
      function random($students)
      {
        $a = rand(0,7);
        print $students[$a]['name'];
      }
/*function to get students by their age */
      function by_age($students, $age)
      {
        for($i=0; $i<count($students)-1; $i++)
        {
          $ages[$i] = $students[$i]['age'];
        }
        sort($ages);
        for($j=0; $j<count($students)-1; $j++)
        {
          if($ages[$age] == $students[$j]['age'])
          {
            print $students[$j]['name'] .'-'. $students[$j]['age'];
          }
        }
      }
/*function to get students by their average mark */
      function by_avg($students, $average)
      {
        //first we need average
        $sum = 0;
        for($i=0; $i<count($students)-1; $i++)
        {
          $sum = $sum + $students[$i]['mark'];
        }        
        $avg = $sum / count($students);
        //now we can use average mark
        if($average == 'alt')
        {
          do
          {
            $a = rand(0, 7);
            $mark = $students[$a]['mark'];
          }
          while($mark >= $avg);
          print $students[$a]['name'].'-'.$students[$a]['mark'];
        }
        else
        {
          do
          {
            $a = rand(0, 7);
            $mark = $students[$a]['mark'];
          }
          while($mark <= $avg);
          print $students[$a]['name'].'-'.$students[$a]['mark'];
        }
      }

      random($students);
      echo "<br>";
      by_age($students, 5);
      echo "<br>";
      by_avg($students, 'ust');
    ?>
  </body>
</html>