<?php
echo '19.php: <br>';


function data (Array $days, $day)
{
    foreach ($days as $item) {
        if($item  == $day) {
            echo '<b>'.$item.'</b>'.'<br>';
        } else {
            echo $item.'<br>';
        }
    }
}

$d = 'Суббота';
$ds = array('Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье');

data($ds, $d);