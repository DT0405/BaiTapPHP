<?php
$M = array (array(1, 0, 1),array(0, 0, 0), array(0, 0, 1) );
$N = array (array(0, 0, 0),array(0, 0, 0), array(0, 0, 0) );
echo"Ma tran M la: <br>";
for ($row = 0; $row < 3; $row++) {
    $a = 0; $b=0;
  for ($col = 0; $col < 3; $col++) {
    echo $M[$row][$col]. " ";
    if($M[$row][$col] == 1){
        $a = $row;
        $b = $col;
        for ($row1 = 0; $row1 < 3; $row1++){
            $N[$a][$row1] = 1;
        }
        for ($cot1 = 0; $cot1 < 3; $cot1++){
            $N[$cot1][$b] = 1;
        }
    }
  }
  echo"<br>";
}
echo"Ma tran N la: <br>";
for ($row = 0; $row < 3; $row++) {
  for ($col = 0; $col < 3; $col++) {
    echo $N[$row][$col]. " ";
  }
  echo"<br>";
}

