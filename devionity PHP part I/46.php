<?php

$a = 3;
$b = 4;


switch (is_int($a) && is_int($b)) {
    case ($a > $b): echo $a; break;
    case ($b < $a): echo $b; break;
    default: echo 'Значения равны';
}
echo '<br>';