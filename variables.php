<h1><?php
//Single Line comment
#Single line comment
/* 
Multiple lines comment
*/

//Variables
$output_var = "I am Output";
$num1 = 5;
$float1 = 5.5;
$bool1 = true;


//Addition of variables
$n1 = 10;
$n2 = 20;
$total = $n1 + $n2;

// Addition of strings
$str1 = "Hello";
$str2 = "Hobbit";
$greetingString_singleComma = $str1 . ' ' . $str2;
$greetingString_doubleComma = "$str1 $str2";

//constants
define('GREETING', 'hELLO from a CONSTANT greeting');


//echo greetingString_singleComma;
echo GREETING;

?></h1>