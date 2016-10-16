<?php
$f = fopen('test.txt', 'w');

for($i = 1; $i <= 10; $i++){
    for ($j = 1; $j <= $i; $j++) {
        fwrite($f, $i);
    }
    fwrite($f, PHP_EOL);
}

fclose($f);

echo 'Файл записан!'.'<br>';