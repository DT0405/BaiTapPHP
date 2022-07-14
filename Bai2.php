<?php
$A = array (5, 4, 3, 2, 6 , 8, 9);
$B = array (4, 5, 7, 1);
$C = array();
rsort($A);
$len = count($A);
echo "Mang A la: ";
for($row = 0; $row < $len; $row++){
    echo "$A[$row] ";
    $C[$row] = $A[$row];
}
$lenc = $len;
for ($row = 0; $row < count($B); $row++) {
    $id = 0;
    for ($i=0; $i<$len; $i++) {
        if ($B[$row] == $A[$i]) {
            $id =1;  
        }
    }
    if($id == 0){
        $C[$lenc] = $B[$row];
        $lenc++;
    }
}
rsort($C);
echo "<Br>Mang C la: ";
for($row = 0; $row < $lenc; $row++){
    echo "$C[$row] ";
}
