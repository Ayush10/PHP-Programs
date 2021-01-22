<?php
//function local_var()
//{
//    $num = 400;  //local variable
//    echo "Local variable declared inside the function is: ". $num . ".\n";
//}
//local_var();
//$num = 500;
//
//echo "This is completely different variable: ". $num . ".\n";

//function static_var()
//{
//    static $num1 = 3;       //static variable
//    $num2 = 6;          //Non-static variable
//    //increment in non-static variable
//    $num1++;
//    //increment in static variable
//    $num2++;
//    echo "Static: " .$num1 ."\n";
//    echo "Non-static: " .$num2 ."\n";
//}
//
////first function call
//static_var();
//
////second function call
//static_var();

$name = "Ayush Ojha";
//Global Variable
function global_var()
{
    global $name;
    echo "Variable inside the function: ". $name;
    echo "\n";
}
global_var();
echo "Variable outside the function: ". $name;

