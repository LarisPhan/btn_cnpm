<?php
function USCLN($a,$b){
    if($b== 0 ) return $a;
    return USCLN( $b, $a % $b);
}
function BSCNN($a, $b){
    return( $a * $b ) / USCLN($a, $b);
}
$a = 15;
$b = 40;
echo ("USCLN của $a và $b là:".USCLN($a,$b))."<br>";
echo ("BSCNN của $a và $b là:".BSCNN($a,$b));
?>