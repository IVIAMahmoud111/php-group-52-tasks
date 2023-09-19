<?php

// define some var of diffrent type
$integerVar = 50;
$floatVar = 3.14;
$stringVar = "Hello, World!";
$arrayVar = ['yellow', 'blue', 'green'];

//vardump (1):
echo "Using var_dump:\n";
var_dump($integerVar);
var_dump($floatVar);
var_dump($stringVar);
var_dump($arrayVar);


// gettype (2):
echo "using gettype:", "<br>";
echo "type of integer: " . gettype($integerVar) . "<br>"; 
echo "type of floatVar: " . gettype($floatVar) . "<br>"; 
echo "type of stringVar: " . gettype($stringVar) . "<br>"; 
echo "Type of arrayVar: " . gettype($arrayVar) . "<br>";

// print_r (3):
echo "Using print_r:\n";
print_r($arrayVar);
?>