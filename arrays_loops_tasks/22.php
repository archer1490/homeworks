<?php
echo '22.php: <br>';
$item = 2;
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $item; $j++) {
        echo 'x';
    }
    echo '<br>';
    $item += 2;
}
