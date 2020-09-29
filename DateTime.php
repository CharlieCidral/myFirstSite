<?php
//setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
//date_default_timezone_set('America/Sao_Paulo');
//echo "Hoje é uma " . strftime('%A %d de %B');


//$date = new DateTime('2020-01-01 15:35:00');
//date->add( DateInterval::createFromDateString('2 days 5 minutes 17 seconds') );
//$date->sub( DateInterval::createFromDateString('2 days 5 minutes 17 seconds') );
//$date->setTimezone( new DateTime('America/Sao_Paulo') );

$date1 = new DateTime('1995-03-13');
$date2 = new DateTime();

$diff = $date1->diff($date2);
echo $diff->format('%y anos, %m meses, %d dias, %h horas, %i minutos, %s segundos');
