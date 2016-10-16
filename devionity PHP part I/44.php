<?php

$a = 3;
$b = 4;

function max($x, $y) {
    if($x > $y) {
        return $x;
    }
    elseif ($y < $x) {
        return $y;
    }
    else {
        return 'Значения равны';
    }
}
echo max($a, $b);
echo '<br>';