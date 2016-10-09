<?php
echo '25.php: <br>';

$arr = array();
for ($i=0; $i<=20; $i++) {
    $arr[] = rand(0, 20);
}
echo 'Исходный массив: <br>';
echo "<pre>";
print_r($arr);
echo "<pre>";

$min = min($arr); //минимальное значение в массиве
$max = max($arr); //максимальное значение в массиве

$keyMin = array_search($min, $arr);
$keyMax = array_search($max, $arr);

$arr[$keyMin] = $max;
$arr[$keyMax] = $min;

echo 'Массив после изменеия местами минимального и максимального значения <br>';
echo "<pre>";
print_r($arr);
echo "<pre>";