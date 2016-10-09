<?php
echo '26.php: <br>';
$product = 1;
$arr = array();
for ($i=0; $i<=20; $i++) {
    $arr[] = rand(0, 100);
}
foreach ($arr as $key=>$value) {
    if($value > 0 and $key % 2 == 0) {
       $product *= $value;
    }
    elseif ($value > 0 and $key % 2 != 0) {
        echo $value.', ';
    }
}

echo '<br>';
echo 'произведение тех элементов, которые больше ноля и у которых парные
индексы - '.$product.'<br>';
