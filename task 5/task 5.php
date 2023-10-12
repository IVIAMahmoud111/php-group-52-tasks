<?php

/* Write a function to calculate the factorial of a number 
(a non-negative integer). The function accepts the number as an argument. */

function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Example usage:
$number = 5;
$result = factorial($number);
echo "Factorial of $number is $result";



// Write a function to reverse any inputs you give ( if you give it ahmed it return demha ).

function reverseString($str) {
    return strrev($str);
}

$input = "ahmed";
$reversed = reverseString($input);
echo "Reversed string: $reversed";



// Write a PHP script to get the first word of a sentence
function getFirstWord($sentence) {
    $words = explode(" ", $sentence);
    return $words[0];
}

$sentence = "This is a sample sentence.";
$firstWord = getFirstWord($sentence);
echo "First word: $firstWord";



/* Write a PHP script to generate simple random password from 
a given string (password will be from => '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz')*/

function generateRandomPassword($length, $characters) {
    $password = '';
    $charCount = strlen($characters);
    
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, $charCount - 1);
        $password .= $characters[$randomIndex];
    }

    return $password;
}

$allowedCharacters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
$passwordLength = 8;
$randomPassword = generateRandomPassword($passwordLength, $allowedCharacters);
echo "Random Password: $randomPassword";



// Write a PHP script that displays 1 2 3 4 5 6 7 8 9 10 numbers on one line

for ($i = 1; $i <= 10; $i++) {
    echo $i . ' ';
}



//search on recursive function and make an example php code

function factorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Example
$number = 5;
$result = factorial($number);
echo "Factorial of $number is $result";

?>