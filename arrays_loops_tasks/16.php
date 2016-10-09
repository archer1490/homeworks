<?php
echo '16.php: <br>';
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr as $item) {
    if($item % 3 == 0) {
        echo $item.'<br>';
    } else {
        echo $item.', ';
    }
}