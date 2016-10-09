<?php
include "9.php";

switch (is_int($day))
{
    case ($day >= 1 && $day <= 5): echo 'Это рабочий день'; break;
}