<?php

// /* local variable: 

// The variables that are declared within a function are called local variables for that function.
// These local variables have their scope only in that particular function in which they are declared. local variable*/

function local_var()  
{  
    $num = 45;  //local variable  
    echo "Local variable declared inside the function is: ". $num;  
}  
local_var() // calling the function





//Global variable

/*The global variables are the variables 
that are declared outside the function*/

$name = "The magician and the rabbit"; //Global Variable  
    function global_var() //function name
    {  
        global $name;  //GLOBAL keyword before the variable
        echo "Red rabit inside the function: ". $name;  
        echo "</br>";  
        echo "</br>";  
    }  
    global_var();  
    echo "Red rabit outside the function: ". $name;  

    
//Deffrence

/*CONSTANT
scope: constant have a (global scope) by defult whech mean they can accssed from (any where), including
inside function too.
Reassignment: Constants cannot be changed or reassigned once they are defined.
They are meant to hold values that remain constant throughout the script's execution*/
 
define('CONSTANT', 'HellOo.'); // define is for constant, constant are global in scope... constant is(constant name), HellOo. is(constant value)
function myconstantFunction() {
    echo CONSTANT;
}
myconstantFunction(); // (function calling)


/*VARIABLES
Scope: Variables have different scopes depending on where they are declared.
Local variables: Variables declared inside a function have 
local scope, which means they can only be accessed within that function.
Global variables: Variables declared outside of functions have global scope, 
and they can be accessed from both inside and outside functions.
*/

$globalVar = 'I am global'; // Global variable
function myFunction() {
    $localVar = 'I am local'; // Local variable
    echo $localVar, "<br>";
    echo $GLOBALS['globalVar']; // Accessing global variable using $GLOBALS(superglobal Array). looking for specific global variable
}
myFunction(); // Outputs: I am local I am global

?>