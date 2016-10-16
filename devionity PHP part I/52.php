<?php
function test($x, $y)
{
    if ($y == 0) {
        exit('Error'.'<br>');
    }

    return $x / $y;

}

echo test(1, 0);
echo 'Unreached line';