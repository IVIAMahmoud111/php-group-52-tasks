<?php
/*Ex2 - try using a built in function to get max int number system can hold and assign it to $max_int 
  try to explain what happen in the following array*/

$max_int = PHP_INT_MAX; // This line assigns the maximum integer value that the system can hold to the variable $max_int.

$arr = []; //this line initializes an empty array

$arr[1] = 'last name';  //This line assigns the string 'last name' to the element with the key [1] in the array $arr.

$arr[ $max_int ] = 'this is max of array '; /*This line attempts to assign the string 'this is max of array' to an element 
in the array with the key equal to the maximum integer value ($max_int). However, this is likely to cause an error 
because array keys must be integers, and $max_int is a large integer value, which might not be a valid array key due to limitations in array implementation. 
but it's generally not a recommended practice to use such a large integer as an array key. i did much searching btw so sorry if this is not the right answer*/



$arr[0] = 'first name'; //This line assigns the string 'first name' to the element with the key 0 in the array $arr.

$arr[]  = 'this may be at the last of array'; /*This line appends the string 'this may be at the last of array' to the end of the array $arr without specifying a key.
php will automatically assign the next available integer key, which in this case would be 2 since 0 first name and 1 are already used*/


?>