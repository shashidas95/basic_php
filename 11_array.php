<?php 
/* Array Functions
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
// $programming_languages = ['php', 'c++', 'java', 'c'];
//echo $programming_languages[1];
// $arraypush = array_push($programming_languages, 'python');

// print_r($arraypush);
// print_r($programming_languages);

// $programming_languages[]='go';
// print_r($programming_languages);
// //echo $programming_languages[-1];//will through a warning, but in string it wouldnot through warning


// $string = 'hello world';
// echo $string[-1]; // its ok, in string, and the output will be d.



/* $files[] = $file is a syntax in PHP that appends the value of $file to the end of the $files array. 
It's a shorthand way of adding elements to an array without having to specify the index of the element.

Here's an example of how this syntax can be used:

 */
// $files = [];
// $files[] = "file1.txt";
// $files[] = "file2.txt";
// $files[] = "file3.txt";

// print_r($files);
/* 
In this example, we initialize an empty array $files, and then add three file names to it using $files[] = $file;. 
Each time this line is executed, the value of $file is appended to the end of the $files array.

This syntax can be useful when you're building an array dynamically, 
such as when you're iterating over a list of files in a directory using scandir(), 
and you want to add each file name to an array.
 */


// $marks = 27;
// if ($marks >= 90) {
//     echo "A+";
// } elseif ($marks >=80) {
//     echo "A";
// }elseif ($marks >=70) {
//     echo "B+";
// }elseif ($marks >=60) {
//     echo "B";
// }elseif ($marks >=50) {
//     echo "C+";
// }else {
//     echo "fail";
// }
/* Example #1 array() example */
$fruits = array (
    "fruits"  => array("a" => "orange", "b" => "banana", "c" => "apple"),
    "numbers" => array(1, 2, 3, 4, 5, 6),
    "holes"   => array("first", 5 => "second", "third")
);
print_r($fruits);
echo PHP_EOL;
/* Example #2 Automatic index with array() */
$array = array(1, 1, 1, 1,  1, 8 => 1,  4 => 1, 19, 3 => 13);
print_r($array);
echo PHP_EOL;
/* Example #3 1-based index with array() */
$firstquarter = array(1 => 'January', 'February', 'March');
print_r($firstquarter);
echo PHP_EOL;

/* As in Perl, you can access a value from the array inside double quotes. However, with PHP you'll need to enclose your array between curly braces.
 Example #4 Accessing an array inside double quotes*/

$foo = array('bar' => 'baz');
echo "Hello {$foo['bar']}!"; // Hello baz!
echo PHP_EOL;
?>