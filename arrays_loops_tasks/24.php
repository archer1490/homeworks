<?php
echo '24.php: ';
$count = 0;
$int = 442158755745;
$arr = str_split($int);
foreach ($arr as $item) {
    if ($item == 5) {
        $count++;
    }
}
echo $count.'<br>';