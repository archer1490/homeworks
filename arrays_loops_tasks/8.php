<?php
$result = '';
echo '8.php: ';
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr as $item) {
    $result .= (string)$item;
}
echo $result.'<br>';
