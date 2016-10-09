<?php

echo '7.php: <br>';
$arr = array(2, 5, 9, 15, 0, 4);
foreach ($arr as $item) {
    if($item > 3 and $item < 10) {
        echo $item.'<br>';
    }
}