<?php
echo '12.php: ';
$n = 1000;
$num =0;
while ($n / 2 >= 50) {
    $n /= 2;
    $num++;
}
echo 'Результат - '.$n.' Количество итераций - '.$num.'<br>';
