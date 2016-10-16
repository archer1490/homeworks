<?php

$a = 3;
$b = 4;

function xorswap (&$x , &$y) {
    if ($x == $y) {
        return;
    }
    $x ^= $y;
    $y ^= $x;
    $x ^= $y;
}

xorswap($a, $b);

echo '$a = '.$a.'<br>';
echo '$b = '.$b.'<br>';
