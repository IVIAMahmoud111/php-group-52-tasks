<?php
// This is a single-line comment
$variable = 10; // You can add comments at the end of a line of code

/*
This is a multi-line comment.
It can multiple lines.
*/
$variable = 20;

# This is a comment using the '#' symbol
$variable = 30;

/**
 * This is a docblock comment.for function
 *
 * @param int $num1 The first number
 * @param int $num2 The second number
 * @return int The sum of $num1 and $num2
 * they dont affect the code's behavior directly
 */
 function addNumbers($num1, $num2) {
    return $num1 + $num2;
 }


 
$vartype = 50; // define a variable and assign it an integer value

// use gettype to determine the data type of variable
$dataType = gettype($vartype);
echo "Data type of myVariable: $dataType", "<br>", "<br>"; // Output: Data type of myVariable: integer

// Use var_dump to display detailed information about the variable
echo "var_dump down here:\n";
var_dump($vartype);
/* Output:
int(50)
*/
?>