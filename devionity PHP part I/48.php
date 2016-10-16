<?php
// решето Эратосфена
function seive1 ($n) {
    $S = array();
    $S[1] = 0; // 1 - не простое число
    // заполняем решето единицами
    $k = 2;
    while ($k <= $n) {
        $S[$k] = 1;
        $k++;
    }
    $m = 2;
    while ($m * $m <= $n) {
        if($S[$m] == 1) {
            // то вычеркнем кратные m
            $l = $m * $m;
            while ($l <= $n) {
                $S[$l] = 0;
                $l += $m;
            }
        }
        $m++;
    }
    return $S;
}
// присваиваем вывод функции переменной
$arr =(seive1(100));
foreach ($arr as $key => $value) {
    if ($value == 1) {
        echo $key.', ';
    }
}
echo '<br>';