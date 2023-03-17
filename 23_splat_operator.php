<?php 
/* You will learn how to unpack arguments using the splat operator/ellipsis operator & how to capture
 passed arguments into a single array using the splat operator. 
 You will learn what the named arguments feature is and 
how to use it with examples. The named arguments feature was added in PHP 8. */
// function sum(int|float $x, int|float $y, int|float ...$numbers):int|float
// {
//     $z = $x + $y + array_sum($numbers);
//     return $z;
// }
// $result =sum(10, 20, 30, 40, 50, 60, 70, 80,90,100);
// echo $result;

// declare(strict_types =1);
// function foo(int $x, int $y):int
// {
//     if ($x%$y === 0) {
//        return $x/$y;
//     }else{
//         return $x;
//     }
    
// }
// $x =6;
// $y =4;
// echo foo(y:$y, x:$x);

declare(strict_types =1);
function foo(int $x, int $y):int
{
    if ($x%$y === 0) {
       return $x/$y;
    }else{
        return $x;
    }
    
}
$arr =['x'=>6, 'y'=>2];

echo foo(...$arr);//unpacking arguments ...
?>