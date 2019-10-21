<?php
$m = array(
    02 =>'aisne',
    59 => 'nord',
    60 => 'oise',
    62 => 'Pas de Calai',
    80 => 'somme');
$m[51] = 'Marne';
function test_print($value){
    echo ("$value\n");
}
array_walk($m, "test_print");
?>