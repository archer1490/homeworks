<?php
echo '18.php: <br>';
$arr = array('Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье');
foreach ($arr as $item) {
    if($item  == 'Суббота' or $item == 'Воскресенье') {
        echo '<b>'.$item.'</b>'.'<br>';
    } else {
        echo $item.'<br>';
    }
}