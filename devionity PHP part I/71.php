<?php
function print_array (Array $a) {
    foreach ($a as $key => $value ) {
        if (is_array($value)) {
            print "[{$key}]".' => ';
            print_array($value);
        }
        else {
            print "[{$key}]".' => '.$value;
        }
    }

}

$s = array(3, 3, 3);
$k = array(2, $s, 2,);
$arr = array(1, 1, $k, 1);



print_array($arr);
