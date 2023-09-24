<?php
/*Ex2  try using a built in function to get max int number system can hold and assign it to $max_int 
  try to explain what happen in the following array*/

$max_int = 'PHP_INT_MAX'; //this (php_int_max) we can use it to get the maximum int value that the system can hold 

$arr = []; // this line initializes an empty array

$arr[1] = 'last name'; 

$arr[ $max_int ] = 'this is max of array '; 

$arr[0] = 'first name'; 

$arr[]  = 'this may be at the last of array'; 

?>