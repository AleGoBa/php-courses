<?php

////Create from string date
//$date = new DateTime('2021-06-15');
////Add intervals from string like strtotime
//$date->add(DateInterval::createFromDateString('1 hour + 30 min'));
////Return date in a specific format
//echo $date->format('d F Y H:i:s');
//echo "\n";
//
////Datetime from Unix time
//$date = time();
//$date = new DateTime("@{$date}");
//echo $date->format('d F Y H:i:s');
//echo "\n";
//
////Datetime from specific date from Unix time
//$date = mktime(1, null, null, 2, 8, 2020);
//$date = new DateTime("@{$date}");
//echo $date->format('d F Y H:i:s');
//echo "\n";
//
////Datetime from new DateInterval object
//$date->add(new DateInterval('P1Y1D'));
//echo $date->format('d F Y H:i:s');
//echo "\n";
//
////Create DateTime object from Unix time
//$date = date_create_from_format('U', strtotime('1 year'));
//echo $date->format('d F Y H:i:s');
//echo "\n";
//
////Convert DateTime object to Unix time
//echo $date->format('U');
//echo "\n";
//
////Difference between two datetime objects
//$date1 = new DateTime('2022-03-21');
//$date2 = new DateTime('2023-03-21');
////returns DateInterval
//$interval = $date1->diff($date2);
//echo $interval->format('%R %y years %m months %d days');
//echo "\n";
//
////A dumb way to format a Unix time date
//echo date("Y/m/d",(new DateTime('2022-06-09'))->format('U'));
//echo "\n";
//
////Best way to add/sub intervals to a date without DateInterval object or
//$date->modify('1 year');
//echo $date;
//echo "\n";

//Best alternative of mktime() function
$time = strtotime('2022-12-06 03:00:34');
$date = new DateTime("@{$time}");
echo $date->format('d F Y H:i:s');

