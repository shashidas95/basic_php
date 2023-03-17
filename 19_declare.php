<?php 
declare(strict_types=1);
function sum(int $x, int $y)
{
   $z =$x+$y;
   return $z;
}
$r = sum("5", 10);//which returns an uncaught type error as parameter type is declared as strict types integer
echo $r;
?>