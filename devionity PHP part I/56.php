<?php
$h = fopen('test.txt', 'r');
$text = fread($h, filesize('test.txt'));
echo $text.'<br>';
