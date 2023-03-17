<?php 
require('helpers.php');

// echo "usort — Sort an array by values using a user-defined comparison function";
/* usort(array &$array, callable $callback): true */

// function cmp($a, $b)
// {
//     if ($a == $b) {
//         return 0;
//     }
//     return ($a < $b) ? -1 : 1;
// }

// $a = array(3, 2, 5, 6, 1);

// usort($a, "cmp");

// foreach ($a as $key => $value) {
//     echo "$key: $value\n";
// }
/* 

This is a PHP code that demonstrates how to sort an array using a user-defined comparison function.

The code defines a comparison function named cmp, which takes two arguments ($a and $b) and returns -1, 0, or 1 depending on whether $a is less than, equal to, or greater than $b, respectively.

Then, the code creates an array $a with five elements and calls the usort function to sort the array using the cmp function as the comparison function.

Finally, the code iterates over the sorted array and prints out each element's key and value. 
The output of the code will be:
0: 1
1: 2
2: 3
3: 5
4: 6
which shows that the original array has been sorted in ascending order.
*/


//😀
/* usort(array &$array, callable $callback): true 
usort is a PHP function that sorts an array using a user-defined comparison function.

It takes two arguments:

The first argument is a reference to the array that needs to be sorted. 
Note that the 😇 & symbol before $array means that the function will modify the original array, 
rather than creating a copy of it.
The second argument is a callable function that defines the order in which the elements of the array 
should be sorted. The callback function should take two arguments (the elements to compare) and return 
an integer.

The integer should be:
Less than zero if the first argument is less than the second argument.
Greater than zero if the first argument is greater than the second argument.
Equal to zero if the two arguments are equal.
Here's an example of how to use usort:


function compare_lengths($a, $b) {
    if (strlen($a) == strlen($b)) {
        return 0;
    }
    return (strlen($a) < strlen($b)) ? -1 : 1;
}

$words = array('apple', 'banana', 'orange', 'pear');
usort($words, 'compare_lengths');

print_r($words);

In this example, we define a function compare_lengths that compares two strings by their length, and returns -1, 0, or 1 depending on the result of the comparison.

We then create an array of strings and call usort with the array and the compare_lengths function as arguments.

usort sorts the array in ascending order of string length, and the print_r function is used to print the sorted array.

The output of the code will be:


Array
(
    [0] => pear
    [1] => apple
    [2] => banana
    [3] => orange
)
which shows that the original array has been sorted in ascending order of string length.
 */

//  function cmp($a, $b){
//     if ($a==$b) {
//         return 0;
//     } else {
//         return $a>$b?1:-1;
//     }
//  }
//  $a = [5, 8,7,1,2,3];

//  usort($a, "cmp");
//  prettyPrintArray($a);

// function compare_lengths($a, $b){
//     if (strlen($a)==strlen($b)) {
//         return 0;
//     } else {
//         return strlen($a)>strlen($b)?1:-1; //ascending order
//     }
// };
// $fruits = ["apple", "bananaa", "pineapple", "orange"];
// usort($fruits,"compare_lengths" );
// prettyPrintArray($fruits);

// function compare_lengths($a, $b){
//     if (strlen($a)==strlen($b)) {
//         return 0;
//     } else {
//         return strlen($a)>strlen($b)?-1:1; //descending order
//     }
// };
// $fruits = ["apple", "bananaa", "pineapple", "orange"];
// usort($fruits,"compare_lengths" );
// prettyPrintArray($fruits);

// $array = ['d'=>1, 'c'=>4, 'b'=>3, 'a'=>2];

// usort($array, fn($a,$b)=>$a<=>$b); //<=> spaceship operator

// print_r($array);



/* The spaceship operator (<=>) is a comparison operator introduced in PHP 7 that simplifies the task of comparing two values. 
The operator returns one of three values:

-1 if the left operand is less than the right operand.
0 if the left and right operands are equal.
1 if the left operand is greater than the right operand.
Here is an example of how to use the spaceship operator:

$a = 10;
$b = 20;
echo $a <=> $b; // prints -1

$a = 20;
$b = 20;
echo $a <=> $b; // prints 0

$a = 30;
$b = 20;
echo $a <=> $b; // prints 1

In the first example, the spaceship operator compares the values of $a and $b, and returns -1 because $a is less than $b.

In the second example, the operator returns 0 because both operands are equal.

In the third example, the operator returns 1 because $a is greater than $b.

😀
The spaceship operator can also be used in conjunction with other PHP functions like usort to simplify 
the comparison process. For example, the following code sorts an array of integers in ascending order
 using the spaceship operator:

*/
// $numbers = [3, 6, 1, 8, 2, 9];
// usort($numbers, function($a, $b) {
//     return $a <=> $b;
// });
// print_r($numbers); // prints [1, 2, 3, 6, 8, 9]

/* another way */
// $numbers = [3, 6, 1, 8, 2, 9];
// usort($numbers, fn($a, $b)=> $a <=> $b);
// print_r($numbers); // prints [1, 2, 3, 6, 8, 9]

/*  
In this example, usort uses an anonymous function that compares two values using the spaceship operator. 
The function returns
-1 if the first argument is less than the second, 
0 if they are equal, and 
1 if the first argument is greater than the second. 
usort sorts the array in ascending order, and 
print_r is used to print the sorted array. */

?>