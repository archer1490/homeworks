<?php
echo '18.php: <br>';
$day = 'Суббота';
$arr = array('Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье');
foreach ($arr as $item) {
    if($item  == $day) {
        echo '<b>'.$item.'</b>'.'<br>';
    } else {
        echo $item.'<br>';
    }
}