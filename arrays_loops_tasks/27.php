<?php
echo '27.php: <br>';

$row = 9;
$cols = 9;
$colors = array('red','yellow','blue','gray','maroon','brown','green');

echo '<table>';
for ($r = 1; $r <= $row; $r++){
    echo '<tr>';
    for ($c = 1; $c < $cols; $c++) {
        $color = rand(0, 6);
        echo "<td style='background-color:{$colors[$color]}'>";
        echo rand();
        echo "</td>";
    }
    echo '<tr>';
}

echo '</table>';