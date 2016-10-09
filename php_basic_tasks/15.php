<?php
echo '15.php: ';
$a = 14;
$b = 7;
$operator = '/';

switch ($operator) {
    case '+': echo $a + $b; break;
    case '-': echo $a - $b; break;
    case '*': echo $a * $b; break;
    case '%': echo $a % $b; break;
    case '/':
        if($b != 0) {
         echo $a / $b;
        }
        else {
            echo 'На ноль делить нельзя';
        }
        break;
}
echo '<br>';
