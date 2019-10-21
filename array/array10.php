<?php
$m = array(
    02 =>'aisne',
    59 => 'nord',
    60 => 'oise',
    62 => 'Pas de Calai',
    80 => 'somme');
$m[51] = 'Marne';
foreach ($m as $key => $value) {
    echo "{$value} => {$key}"."\n";
}
?>