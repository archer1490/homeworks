<?php
function pre (Array $a) {
    echo '<pre>';
    print_r($a);
    echo '</pre>'.'<br>';
}

$arr = array(1, 2, 3, 4);

pre($arr);