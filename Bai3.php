<?php
$A = array();
$A[0]=1;
$A[1]=2;
$A[2]=3;
$GTTB=0.0;
$a = 0; 
$khoa = 0;
for($i=3; $i<100; $i++){
    $A[$i]=$A[$i-3]+$A[$i-1]+$A[$i-2];
}
for($i=0; $i<100; $i++){
    echo" $A[$i]";
    $GTTB += $A[$i]/100;
}
echo"<br> GTTB = $GTTB";
for ($i = 0; $i < 100; $i++) {
    if ($A[$i] == $GTTB){
        $a=$i;
        $khoa = 1;
        break;
    }
    if ($A[$i] > $GTTB){
        $a = $i;
        break;
    }
}
if($khoa){
    echo "<br> Hai gia tri can tim la: ".  $A[$a-1]. " Va ".  $A[$a+1];
}
else{
    echo "<br> Hai gia tri can tim la: ".  $A[$a-1]. " Va ".  $A[$a];
}


