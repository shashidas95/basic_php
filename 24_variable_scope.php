<?php 
/* variable scope, global & local scopes. 
You will also learn how you can use static variables to 
optimize your code & cache the value of expensive function 
calls. */

//variable scope, 

// $x = 5;
// function foo()
// {
//     echo $x;
// }
// foo(); //this will through a warning undefined variable


/* 1st option */

// $x = 5;
// function foo()
// { 
//     global $x; //using global keyword
//     $x = 10; //you can then also change the value aslo, 
//     echo $x;
// }
// foo(); 
/* 2nd option */


// $x = 5;
// function foo($x)
// {
//     echo $x;
// }
//foo($x); //this will not through warning
?>