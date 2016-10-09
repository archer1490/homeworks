<?php

$arr = array('green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой');
$en = [];
$ru = [];
$i = 0;
foreach ($arr as $key => $value) {
    $en[$i] = $key;
    $ru[$i] = $value;
    $i++;
}
print_r($en);
print_r($ru);