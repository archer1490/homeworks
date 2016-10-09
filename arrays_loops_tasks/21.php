<?php
echo '20.php: <br>';
$item = 1;
$digit = 1;
for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= $item; $j++) {
        echo $digit;
    }
    echo '<br>';
    $digit++;
    $item++;
}
