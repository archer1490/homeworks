<?php
function pre1 (Array $a, $b = 'print_r') {
    echo '<pre>';
    if ($b == "print_r") {
        print_r($a);
    }
    elseif ($b == 'var_dump') {
        var_dump($a);
    }
    else {
        echo 'Неизвестный параметр';
    }
    echo '</pre>'.'<br>';
}

$arr = array(1, 2, 3, 4);

pre1($arr, 'var_dump');