<?php
$arr = array();
for ($i = 0; $i <= 9; $i++):
    $arr[$i] = rand(1,10);
endfor;
foreach ($arr as $key => $value):
    if($value % 3 == 0):
        echo $value;
        echo '<br>';
    endif;
endforeach;
