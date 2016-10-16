<?php
$arr = array(1, 1, 1);

function add_count (& $a) {
    array_push($a, count($a));
}

add_count($arr);

print_r($arr);
echo '<br>';