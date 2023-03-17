<?php 
/* 
Array Functions

array_change_key_case — Changes the case of all keys in an array
array_chunk — Split an array into chunks
array_column — Return the values from a single column in the input array
array_combine — Creates an array by using one array for keys and another for its values
array_count_values — Counts all the values of an array
array_diff_assoc — Computes the difference of arrays with additional index check
array_diff_key — Computes the difference of arrays using keys for comparison
array_diff_uassoc — Computes the difference of arrays with additional index check which is performed by a user supplied callback function
array_diff_ukey — Computes the difference of arrays using a callback function on the keys for comparison
array_diff — Computes the difference of arrays
array_fill_keys — Fill an array with values, specifying keys
array_fill — Fill an array with values
array_filter — Filters elements of an array using a callback function
array_flip — Exchanges all keys with their associated values in an array
array_intersect_assoc — Computes the intersection of arrays with additional index check
array_intersect_key — Computes the intersection of arrays using keys for comparison
array_intersect_uassoc — Computes the intersection of arrays with additional index check, compares indexes by a callback function
array_intersect_ukey — Computes the intersection of arrays using a callback function on the keys for comparison
array_intersect — Computes the intersection of arrays
array_is_list — Checks whether a given array is a list
array_key_exists — Checks if the given key or index exists in the array
array_key_first — Gets the first key of an array
array_key_last — Gets the last key of an array
array_keys — Return all the keys or a subset of the keys of an array
array_map — Applies the callback to the elements of the given arrays
array_merge_recursive — Merge one or more arrays recursively
array_merge — Merge one or more arrays
array_multisort — Sort multiple or multi-dimensional arrays
array_pad — Pad array to the specified length with a value
array_pop — Pop the element off the end of array
array_product — Calculate the product of values in an array
array_push — Push one or more elements onto the end of array
array_rand — Pick one or more random keys out of an array
array_reduce — Iteratively reduce the array to a single value using a callback function
array_replace_recursive — Replaces elements from passed arrays into the first array recursively
array_replace — Replaces elements from passed arrays into the first array
array_reverse — Return an array with elements in reverse order
array_search — Searches the array for a given value and returns the first corresponding key if successful
array_shift — Shift an element off the beginning of array
array_slice — Extract a slice of the array
array_splice — Remove a portion of the array and replace it with something else
array_sum — Calculate the sum of values in an array
array_udiff_assoc — Computes the difference of arrays with additional index check, compares data by a callback function
array_udiff_uassoc — Computes the difference of arrays with additional index check, compares data and indexes by a callback function
array_udiff — Computes the difference of arrays by using a callback function for data comparison
array_uintersect_assoc — Computes the intersection of arrays with additional index check, compares data by a callback function
array_uintersect_uassoc — Computes the intersection of arrays with additional index check, compares data and indexes by separate callback functions
array_uintersect — Computes the intersection of arrays, compares data by a callback function
array_unique — Removes duplicate values from an array
array_unshift — Prepend one or more elements to the beginning of an array
array_values — Return all the values of an array
array_walk_recursive — Apply a user function recursively to every member of an array
array_walk — Apply a user supplied function to every member of an array
array — Create an array
arsort — Sort an array in descending order and maintain index association
asort — Sort an array in ascending order and maintain index association
compact — Create array containing variables and their values
count — Counts all elements in an array or in a Countable object
current — Return the current element in an array
each — Return the current key and value pair from an array and advance the array cursor
end — Set the internal pointer of an array to its last element
extract — Import variables into the current symbol table from an array
in_array — Checks if a value exists in an array
key_exists — Alias of array_key_exists
key — Fetch a key from an array
krsort — Sort an array by key in descending order
ksort — Sort an array by key in ascending order
list — Assign variables as if they were an array
natcasesort — Sort an array using a case insensitive "natural order" algorithm
natsort — Sort an array using a "natural order" algorithm
next — Advance the internal pointer of an array
pos — Alias of current
prev — Rewind the internal array pointer
range — Create an array containing a range of elements
reset — Set the internal pointer of an array to its first element
rsort — Sort an array in descending order
shuffle — Shuffle an array
sizeof — Alias of count
sort — Sort an array in ascending order
uasort — Sort an array with a user-defined comparison function and maintain index association
uksort — Sort an array by keys using a user-defined comparison function
usort — Sort an array by values using a user-defined comparison function
＋add a note
 */
require('helpers.php');
/* array_chunk — Split an array into chunks
 array_chunk(array $array, int $length, bool $preserve_keys = false): array
*/

// $items =['a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5,'f'=>6];
// prettyPrintArray(array_chunk($items,2));// keys are not preserved
// prettyPrintArray(array_chunk($items,2, true));// keys are preserved

/* array_combine()-Creates an array by using one array for keys and another for its values
*/

// $array1 =['a','b','c', 'd', 'e'];
// $array2 =[1, 2, 3, 4, 5];
// prettyPrintArray(array_combine($array1, $array2));

/* array_filter — Filters elements of an array using a callback function
 */

// $array =[1, 2, 3, 4, 5,6,7,8,9,10];
/* array filter itereates over each array value and it 
passes the value to the given callback if the return
of that callback is true then the value is returned into
the resulting array otherwise the element will be discarded  */

// $even = array_filter($array, fn($number)=>$number%2 ===0);
// prettyPrintArray($even);

/* by default the value is passed to the callback as the argument 
but it could change that by specifying the mode flag as the third 
parameter
 so you could specify array filter use key and now instead of number being
 passed as the value you will be passed as the key or you could use the array filter use both 
 and now the first argument is the value and the second argument is the key notice how the keys
 of these elements have gaps in between them thats because array keys are not preserved.
  so it might result
  in gaps like this if the array is numerically indexed if you want to    */

/* mode
  Flag determining what arguments are sent to callback:
  
  ARRAY_FILTER_USE_KEY - pass key as the only argument to callback instead of the value
  ARRAY_FILTER_USE_BOTH - pass both value and key as arguments to callback instead of the value
  Default is 0 which will pass value as the only argument to callback instead.
 */
// $array =[1, 2, 3, 4, 5,6,7,8,9,10];
// $even = array_filter($array, fn($number)=>$number%2 ===0, ARRAY_FILTER_USE_KEY);
// prettyPrintArray($even);
// /*   */
// $array =[1, 2, 3, 4, 5,6,7,8,9,10];
// $even = array_filter($array, fn($number)=>$number%2 ===0, ARRAY_FILTER_USE_BOTH);
// prettyPrintArray($even);



/* array_keys array_keys — Return all the keys or a subset of the keys of an array 
array_keys(array $array): array
array_keys(array $array, mixed $filter_value, bool $strict = false): array

*/

// $array1 = ['a'=>1, 'b'=>2, 'c'=>3];
// $array = array_keys($array1, 2);
// prettyPrintArray($array);
//key is not preserved
//If a filter_value is specified, then only the keys for that value are returned. Otherwise, all the keys from the array are returned.


/* array_map — Applies the callback to the elements of the given arrays */
/*array_map(?callable $callback, array $array, array ...$arrays): array  */

/* √ array_map() returns an array containing the results of applying the callback to the corresponding value of array (and arrays if more arrays are provided) used as arguments for the callback. The number of parameters that the callback function accepts should match the number of arrays passed to array_map(). Excess input arrays are ignored. An ArgumentCountError is thrown if an insufficient number of arguments is provided.

*/
// $func = function(int $value): int {
//     return $value * 2;
// };

// $array1= array_map($func, range(1, 5));

// // Or as of PHP 7.4.0:

// $array2 = array_map(fn($value): int => $value * 2, range(1, 5));

// prettyPrintArray($array1);
// prettyPrintArray($array2);
/* another way */
//  $array1 = ['a'=>1, 'b'=>2, 'c'=>3];
//  $array2 = ['d'=>4, 'e'=>5, 'f'=>6];

//  $array = array_map(fn($number1, $number2)=> $number1 * $number2, $array1, $array2);
//  prettyPrintArray($array);


/* ◊ array_reduce — Iteratively reduce the array to a single value using a callback function*/

/* array_reduce(array $array, callable $callback, mixed $initial = null): mixed
Parameters ¶

array
The input array.

callback
callback(mixed $carry, mixed $item): mixed
carry
Holds the return value of the previous iteration; in the case of the first iteration it instead holds the value of initial.

item
Holds the value of the current iteration.

initial
If the optional initial is available, it will be used at the beginning of the process, or as a final result in case the array is empty.

array_reduce() applies iteratively the callback function to the elements of the array, so as to reduce the array to a single value.

 */
// $itemInvoices =[
//     ['price'=>10.99, 'qnty'=>3, 'desc'=>'item 1'],
//     ['price'=>18.99, 'qnty'=>2, 'desc'=>'item 2'],
//     ['price'=>19.99, 'qnty'=>3, 'desc'=>'item 3'],
//     ['price'=>16.99, 'qnty'=>7, 'desc'=>'item 4'],
//     ['price'=>10.75, 'qnty'=>9, 'desc'=>'item 5'],
//     ['price'=>13.99, 'qnty'=>4, 'desc'=>'item 6']
// ];
// $total =array_reduce($itemInvoices, fn($carry, $item)=>$carry + $item['price'] *$item['qnty'], $initial=500);
// echo $total;

/* $carry Holds the return value of the previous iteration; in the case of the first iteration it instead holds the value of initial.
  and 
  $item holds the current return value of current iteration */

  /* array_search() array_search — Searches the array for a given value and returns the first corresponding key if successful
😀 😀 😀 
array_search(mixed $needle, array $haystack, bool $strict = false): int|string|false
😀 e
✓needle
The searched value.

Note:
If needle is a string, the comparison is done in a case-sensitive manner.
haystack
The array.
⌘⌛︎⎇⎈⌚︎⎷⎷⎷⎷⎷
strict
If the third parameter strict is set to true then the array_search() function will search for identical elements in the haystack. 
⌛︎⎷⎷⎷⎷⎷ This means it will also perform a strict type comparison of the needle in the haystack, and 
objects must be the same instance.
 */

$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');
$key = array_search('blue',$array);
if ($key) {
    echo "color {$key} is  found";
} else {
    echo "color {$key} is not found";
}
echo PHP_EOL;
if (in_array("blue", $array, true)) { //stric comparison true;
    echo "color is found";
}
/* 
Returns the key for needle if it is found in the array, false otherwise.

If needle is found in haystack more than once, the first matching key is returned. 
To return the keys for all matching values, use array_keys() with the optional search_value parameter instead.
  */

// $array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

// $key = array_search('green', $array); // $key = 2;
// //$key = array_search('red', $array);   // $key = 1;
// echo $key;
?>

