<?php
echo '17.php: <br>';
$month = 'Октябрь';
$arr = array('Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь');
foreach ($arr as $item) {
    if($item  == $month) {
        echo '<b>'.$item.'</b>'.'<br>';
    } else {
        echo $item.'<br>';
    }
}