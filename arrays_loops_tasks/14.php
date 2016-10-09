<?php
echo '14.php: ';
$arr = array(4, 2, 5, 19, 13, 0, 10);
foreach ($arr as $item) {
    if($item == 2 or$item == 3 or $item == 4) {
        echo 'Есть! <br>';
        break;
    }
    if ($item == end($arr) and ($item != 2 or $item != 3 or $item != 4)) {
        echo 'Нет! <br>';
    }
}