<?php

echo '2.php: ';

$result = 0;
$arr = array(1, 20, 15, 17, 24, 35);
foreach ($arr as $item) {
    $result += $item;
}
echo $result.'<br>';
