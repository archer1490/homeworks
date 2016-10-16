<?php
echo '13.php: <br>';
echo '<table>';
for ($i = 2; $i <= 9; $i++) {
    for ($j = 2; $j <= 9; $j++) {
        echo '<tr><td style="border: solid 2px black">'.$i.' * '.$j.' = '.'</td>
        <td style="border: solid 2px black">'.$i * $j.'</td></tr>';
    }
}
echo '</table>';