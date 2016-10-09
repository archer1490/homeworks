<?php
echo '23.php: ';
$result = 0;
$int = 123;
$arr = str_split($int);
foreach ($arr as $item) {
    $result += $item;
}
echo $result.'<br>';