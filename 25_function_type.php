<?php 
/* variable functions, anonymous functions, callbacks & closures, and arrow functions. You will also 
learn another type in PHP called callable type. */

//variable
function sum(int|float ...$numbers):int|float {
    return array_sum($numbers);
}
//echo sum(1, 2, 3, 4, 5, 6, 7, 8, 9);

/* another way  */
// $x ='sum';
// echo $x(1, 2, 3, 4, 5, 6, 7, 8, 9);

/* another way is it callable or not */
// $x = 'sum';
// if (is_callable($x)) {
//     echo $x(1, 2, 3, 4, 5, 6, 7, 8, 9);
//     echo "callable";
// } else {
//     echo "not callable";
// }


/* anonymous function */

// $sum =function(int|float ...$numbers):int|float{
//     return array_sum($numbers);
// };//if you miss to put an semicolon in anonymous function that will through a warning

// echo $sum(1, 2, 3, 4, 5, 6, 7, 8, 9);



/* array_map — Applies the callback to the elements of the given arrays

Description ¶

array_map(?callable $callback, array $array, array ...$arrays): array */

/* callable function, callback function can be pass as an 
arguments as like as follows
 */

//  $array = [1,2,3,4,5];
//  $array2 =array_map(function($element){
//     return $element *2;
//  }, $array);

//  echo "<pre>";
//  print_r($array);
//  print_r($array2);
//  echo "<pre>";

 /* 2nd way to pass annonymus function as a callback function 
 */
 
 
//  $array = [1,2,3,4,5];
//  $x= function($element){
//     return $element *2;
//  };
//  $array2 =array_map($x, $array);

//  echo "<pre>";
//  print_r($array);
//  print_r($array2);
//  echo "<pre>";

 /* 3rd way  */


//  $array = [1,2,3,4,5];
//  function foo($element){
//     return $element *2;
//  };
//  $array2 =array_map('foo', $array); //passing function name as a string

//  echo "<pre>";
//  print_r($array);
//  print_r($array2);
//  echo "<pre>";

 /* another way  */


// $sum =function(callable $callback, int|float ...$numbers):int|float{
//     return $callback(array_sum($numbers));
// };//if you miss to put an semicolon in anonymous function that will through a warning

// echo $sum('foo', 1, 2, 3, 4, 5, 6, 7, 8, 9);
// function foo($element){
//     return $element *2;
//  }


 /* another way  */


// $sum =function(callable $callback, int|float ...$numbers):int|float{
//     return $callback(array_sum($numbers));
// };//if you miss to put an semicolon in anonymous function that will through a warning

// echo $sum(function($element){
//     return $element *2;
//  }, 1, 2, 3, 4, 5, 6, 7, 8, 9);

 /* annonymous functions are instances of closure function,
 
 closure  must be annonymous but callable can be normal function
  and we can use closure as type hint.
  */

//   $sum =function(Closure $callback, int|float ...$numbers):int|float{
//     return $callback(array_sum($numbers));
// };//if you miss to put an semicolon in anonymous function that will through a warning

// echo $sum(function($element){
//     return $element *2;
//  }, 1, 2, 3, 4, 5, 6, 7, 8, 9);



/* arrow functions are the cleaner syntax of anonymus functions with a few differences 
 it is very useful as an inline callback function like 
 by passing it as an argument to many of the phase built-in-functions.
 */
//  $array =[1,2,3,4,5];
//  $array2 = array_map(fn($number)=>$number *$number, $array);
//  echo "<pre>";
//  print_r($array2);
//  echo "<pre>";
 /*
 it always access the variables from  the parent scope
 within the arrow function without the need to use the use 
 keyword*/

 $array =[1,2,3,4,5];
 $y=5;
 $array2 = array_map(fn($number)=>$number * $number * $y, $array);
 echo "<pre>";
 print_r($array2);
 echo "<pre>";
/* another difference is arrow function is a single line expression 
you cannot have multiline expressions here */
?>