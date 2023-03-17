<?php 
/* time() function prints a large integer and this integer is an 
unix timestamp in seconds so its a number of seconds since 
1970 january 1st */
//echo time() ;

echo date('m/d/Y g:ia')."\n";
date_default_timezone_get();

echo date('m/d/Y g:ia')."\n";
echo date_default_timezone_get(). "\n";
echo strtotime('2023-10-03 07:00:00');
echo PHP_EOL;
echo date('m/d/Y g:ia', strtotime('first day of march'));
echo PHP_EOL;
echo date('m/d/Y g:ia', strtotime('last day of march'));
echo PHP_EOL;
echo date('m/d/Y g:ia', strtotime('second friday of March'));

?>