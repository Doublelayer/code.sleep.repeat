<?php

$title = 'Wochentage';

setlocale(LC_ALL, 'de_DE@euro', 'de_DE', 'deu_deu');

$day_today = strftime('%A');
$day_in_1_year = strftime('%A', strtotime('+1 year'));

require_once('header.tpl.php');
require_once('day.tpl.php');
require_once('footer.tpl.php');

?>