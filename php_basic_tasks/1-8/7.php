<?php

include "2.php";

if ($age > 18 && $age < 59) {
    echo 'Вам еще рабаботать и работать';
}
elseif ($age > 59) {
    echo 'Вам пора на пенсию';
}
elseif ($age > 0 && $age <=17) {
    echo 'Вам еще рано работать';
}
