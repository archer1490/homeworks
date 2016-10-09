<?php
echo '20.php: <br>';
$item = 1;
for ($i = 1; $i <= 20; $i++) {
    for ($j = 1; $j <= $item; $j++) {
        echo 'x';
    }
    echo '<br>';
    $item++;
}
