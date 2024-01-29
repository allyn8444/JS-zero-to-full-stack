<?php

// You can either use echo or print to get the output:


echo "Hello world <br>";
print "<h2>PHP is Fun!</h2>";
echo "<h2>PHP is Fun!</h2>";
echo phpversion();

// PHP linebreaks
echo "<br>";

// PHP variable
$color = "red";

// append variable to a string
echo "My car is $color <br>";
echo "My favorite color is " . $color . "<br>";
echo "Her dress is ", $color, "<br>";


# number sign can be also used for comments
/*
   This is a multi-line comment
   the same as JS
*/


$x = 5 /* comment in middle of code */ + 5;
echo $x;


// PHP Function
function prettify($array = null) {

   echo "<pre>" . print_r($array, 1) . "</pre>";

}
// for automatic line breaks
// Example:
prettify("hello world");
prettify("hello world");
prettify("hello world");



$x_var = 5;
$y_var = "string";
// Will throw an error
// prettify($x_var + $y_var);


/*

   PHP Data Types

   Variables can store data of different types, and different data types can do
      different things.

   PHP supports the following data types:

   - String
   - Integer
   - Float (floating point numbers - also called double)
   - Boolean
   - Array
   - Object
   - NULL
   - Resource

*/


// To get the data type of a variable, use the var_dump() function.
var_dump($x_var); // output: int(5)
echo "<br>";

// TYPE CASTING (changing data type)

$x = 5;
$x = (string) $x;
var_dump($x);


// You can assign the same value to multiple variables in one line:
$x = $y = $z = "Fruit";




/* ==================  S C O P I N G ====================== */


/*

The scope of a variable is the part of the script where the variable can be referenced/used.

PHP has three different variable scopes:

- local
- global
- static

!Note: Same concept as JS

*/

// Example:
function myTest() {
   $x = 5; // local scope
   echo "<p>Variable x inside function is: $x</p>";
}
myTest();

 // using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";




/*
   PHP The global Keyword
   The global keyword is used to access a global variable from within a function.

   To do this, use the global keyword before the variables (inside the function):

   
*/

$x = 5;
$y = 10;

function myTest1() {
  global $x, $y;
  $y = $x + $y;
}

myTest1();
echo $y; // outputs 15


/*

   OR YOU CAN DO THIS:

   PHP also stores all global variables in an array called $GLOBALS[index].
   The index holds the name of the variable.
   This array is also accessible from within functions and can be used to update global variables directly.

   The example above can be rewritten like this:


   $x = 5;
   $y = 10;

   function myTest() {
   $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
   }

   myTest();
   echo $y; // outputs 15


*/



/*
      PHP The static Keyword
   
   Normally, when a function is completed/executed, all of its variables are deleted.
   However, sometimes we want a local variable NOT to be deleted.
   We need it for a further job.

   To do this, use the static keyword when you first declare the variable:

*/

function myTest2() {
   static $x = 0;
   echo $x;
   $x++;
 }
 
 echo "<br>";
 myTest2(); // 0
 echo "<br>";
 myTest2(); // 1
 echo "<br>";
 myTest2(); // 2
 echo "<br>";

/*
   Then, each time the function is called, that variable will still have the
      information it contained from the last time the function was called.

   Note: The variable is still local to the function.

*/


// ============== STRING METHODS =========


// String Length: The PHP strlen() function returns the length of a string.
echo "The length of the string: ";
echo strlen("Hello world!");
echo "<br>";


// Word Count: The PHP str_word_count() function counts the number of words in a string.

echo "Word count of the string: ";
echo str_word_count("Hello world!");
echo "<br>";


/*
   Search For Text Within a String

   The PHP strpos() function searches for a specific text within a string.

   If a match is found, the function returns the character position of the first match.
   If no match is found, it will return FALSE
*/
echo strpos("Hello world!", "world");
echo "<br>";



// Lower Case: The strtolower() function returns the string in lower case:
$x = "String To Lower! <br>";
echo strtolower($x);


// Replace String:
// The PHP str_replace() function replaces some characters with some other characters in a string.
$x = "String Replace: World!";
$s = str_replace("World", "Dolly", $x);
echo " $s <br>" ;

/*
   syntax: str_replace(a, b, ,c)

   a = string to be replaced
   b = new value of string
   c = reference variable (where nakasulod ang value nga i-replace)
   
*/


// Reverse a String: The PHP strrev() function reverses a string.
$x = "Reverse String";
echo strrev($x);

echo "<br>";


/*
   Remove Whitespace
   Whitespace is the space before and/or after the actual text,
      and very often you want to remove this space.
*/
$x = " Remove Whitespace <br> ";
echo trim($x);

/*
   Convert String into Array
   The PHP explode() function splits a string into an array.

   The first parameter of the explode() function represents the "separator".
   The "separator" specifies where to split the string.

*/

echo "<br> Turn String into Array <br>";
$x = "Hello World!";
$y = explode(" ", $x);

//Use the print_r() function to display the result:
print_r($y);
echo "<br>";



/*

   Slicing
   You can return a range of characters by using the substr() function.
   Specify the start index and the number of characters you want to return.

   syntax:
   substr(string, index_start, slice_how_many_char(exclusive) )

   Example:
   Start the slice at index 6 and end the slice 5 positions later:
*/
$x = "String Slicing";
echo substr($x, 6, 5);
// start at index 6, count 1-4 from index 6, stop at 5th character
// if there is no 3rd argument, it will go til the end
echo "<br>";




/*

   Escape Character

   To insert characters that are illegal in a string, use an escape character.
   An escape character is a backslash \ followed by the character you want to insert.

   Example on how to have double quotes in a string:

   $x = "We are the so-called \"Vikings\" from the north.";


   --------

   Escape Characters
   Other escape characters used in PHP:

   \'	   -Single Quote
   \" 	-Double Quote
   \$	   -PHP variables
   \n	   -New Line
   \r	   -Carriage Return
   \t	   -Tab
   \f	   -Form Feed
   \ooo	-Octal value
   \xhh	-Hex value

*/

echo "We are the so-called \"Vikings\" from the north. <br>";


// ==== END OF STRING METHODS


/*

   PHP Numbers
   There are three main numeric types in PHP:

   - Integer
   - Float
   - Number Strings

   In addition, PHP has two more data types used for numbers:

   - Infinity
   - NaN


 */


echo "<br>";

 // ======= PHP Math ===========

// PHP has a set of math functions that allows you to perform mathematical tasks on numbers.

echo "The value of pi is: " . pi() . "<br>";


/*
   PHP min() and max() Functions
   The min() and max() functions can be used to find the lowest or
      highest value in a list of arguments:
*/

echo("Minimum value is: " . min(0, 150, 30, 20, -8, -200) . "<br>");
echo("Maximum value is: " . max(0, 150, 30, 20, -8, -200) . "<br>");


// The abs() function returns the absolute (positive) value of a number:
echo("Turns value to positive: " . abs(-6.7) . "<br>");


// ==== END of PHP MATH




// ========== PHP Constants ==========

echo "<br> CONSTANTS! <br>";

/*

   A constant is an identifier (name) for a simple value.
   The value cannot be changed during the script.

   A valid constant name starts with a letter or underscore
      (no $ sign before the constant name).

   Note: Unlike variables, constants are automatically global across the entire script.
   CONSTANTS ARE GLOBAL


   Create a PHP Constant
   - To create a constant, use the define() function

   SYNTAX: define(name, value, case-insensitive);

   Parameters:
      name: Specifies the name of the constant
      value: Specifies the value of the constant
      case-insensitive: Specifies whether the constant name should be case-insensitive.
      Default is false.
      
      Note: Defining case-insensitive constants was deprecated in PHP 7.3. PHP 8.0 accepts only false, the value true will produce a warning.

*/

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING . "<br>";
// echo greeting; throws an error


/*

   PHP const Keyword
   You can also create a constant by using the const keyword.

   EXAMPLE
   Create a constant with the const keyword:
*/
const LAPTOP = "MAC";
echo LAPTOP . "<br>";


/*

const vs. define()

   - const are ALWAYS case-sensitive
   - define() has has a case-insensitive option.
   - const cannot be created inside another block scope, like inside a function or inside an if statement.
   - define can be created inside another block scope.

*/

// ===== END of PHP Constants



// ========== PHP Magic Constants =========


/*

PHP Predefined Constants

   PHP has nine predefined constants that change value depending on where they are used,
      and therefor they are called "magic constants".

   These magic constants are written with a double underscore at the start and the end,
      except for the ClassName::class constant.


Constant	                        Description
__CLASS__	      - If used inside a class, the class name is returned.
__DIR__	         - The directory of the file.
__FILE__	         - The file name including the full path.
__FUNCTION__   	- If inside a function, the function name is returned.
__LINE__	         - The current line number.
__METHOD__	      - If used inside a function that belongs to a class, both class and function name is returned.
__NAMESPACE__	   - If used inside a namespace, the name of the namespace is returned.
__TRAIT__	      - If used inside a trait, the trait name is returned.
ClassName::class	Returns the name of the specified class and the name of the namespace, if any.


*/
// ==== END of MAGIC CONSTANTS



// ========== PHP OPERATORS ==========
/*

Operators are used to perform operations on variables and values.

PHP divides the operators in the following groups: (8)

   - Arithmetic operators
   - Assignment operators
   - Comparison operators
   - Increment/Decrement operators
   - Logical operators
   - String operators
   - Array operators
   - Conditional assignment operators

--------

   ARITHMETIC OPERATORS

The PHP arithmetic operators are used with numeric values to perform common arithmetical
   operations, such as addition, subtraction, multiplication etc

   ADD: +
   SUBTRACT: -
   MULTIPLY: *
   DIVIDE: /
   MODULUS: % (remainder operator)
   EXPONENT: **

-------
   
   ASSIGNMENT OPERATORS

- The PHP assignment operators are used with numeric values to write a value to a variable.
- The basic assignment operator in PHP is "=".
- It means that the left operand gets set to the value of the assignment
   expression on the right.


Assignment	    Same as...	      Description
x = y          x = y	         The left operand gets set to the value of the expression on the right
x += y	      x = x + y	   Addition
x -= y	      x = x - y	   Subtraction
x *= y	      x = x * y	   Multiplication
x /= y	      x = x / y	   Division
x %= y	      x = x % y	   Modulus


--------

   COMPARISON OPERATORS

The PHP comparison operators are used to compare two values (number or string):


Operator	     Name	                  Example	         Result
==	         Equal	                   $x == $y	      Returns true if $x is equal to $y
===	      Identical	             $x === $y	      Returns true if $x is equal to $y, and they are of the same type
!=	        Not equal	                $x != $y	      Returns true if $x is not equal to $y
<>	        Not equal	                $x <> $y	      Returns true if $x is not equal to $y
!==	   Not identical	             $x !== $y	      Returns true if $x is not equal to $y, or they are not of the same type
>	      Greater than	             $x > $y	         Returns true if $x is greater than $y
<	      Less than	                $x < $y	         Returns true if $x is less than $y
>=	      Greater than or equal to	$x >= $y	         Returns true if $x is greater than or equal to $y
<=	      Less than or equal to	   $x <= $y	         Returns true if $x is less than or equal to $y
<=>	   Spaceship	               $x <=> $y	      Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.


---------

   INCREMENT / DECREMENT OPERATORS
- The PHP increment operators are used to increment a variable's value.
- The PHP decrement operators are used to decrement a variable's value


Operator	      Same as...	            Description
++$x	      Pre-increment	      Increments $x by one, then returns $x
$x++	      Post-increment	      Returns $x, then increments $x by one
--$x	      Pre-decrement	      Decrements $x by one, then returns $x
$x--	      Post-decrement	      Returns $x, then decrements $x by one


--------

   LOGICAL OPERATORS

The PHP logical operators are used to combine conditional statements.


Operator 	Name	   Example	         Result
and	      And	   $x and $y	   True if both $x and $y are true
or	         Or	      $x or $y	      True if either $x or $y is true
xor	      Xor	   $x xor $y	   True if either $x or $y is true, but not both
&&	         And	   $x && $y 	   True if both $x and $y are true
||	         Or	      $x || $y    	True if either $x or $y is true
!	         Not	   !$x	         True if $x is not true



---------

   CONDITIONAL ASSIGNMENT OPERATORS

The PHP conditional assignment operators are used to set a value depending on conditions:


Operator	   Name	      Example
?:	        Ternary	$x = expr1 ? expr2 : expr3

RESULT:
Returns the value of $x.
The value of $x is expr2 if expr1 = TRUE.
The value of $x is expr3 if expr1 = FALSE


Operator	   Name	                Example
??        Null coalescing	   $x = expr1 ?? expr2

RESULT:
Returns the value of $x.
The value of $x is expr1 if expr1 exists, and is not NULL.
If expr1 does not exist, or is NULL, the value of $x is expr2.
Introduced in PHP 7


*/
// ==== END of PHP OPERATORS



// =========== CONDITIONAL STATEMENTS =============

/*

PHP Conditional Statements
Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.

In PHP we have the following conditional statements:

   if statement - executes some code if one condition is true
   if...else statement - executes some code if a condition is true and another code if that condition is false
   if...elseif...else statement - executes different codes for more than two conditions
   switch statement - selects one of many blocks of code to be executed


   SHORTHANDS

One-line if statement:

$a = 5;
if ($a < 10) echo "Hello";


One-line if...else statement:
$a = 13;

$b = $a < 10 ? "Hello" : "Good Bye";

echo $b;



   SWITCH CASE:

switch (expression) {
  case label1:
    //code block
    break;
  case label2:
    //code block;
    break;
  case label3:
    //code block
    break;
  default:
    //code block
}


EXAMPLE:

$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

*/

// ===== END of Conditional Statements




// ======== PHP LOOPS! =======

/*

- Often when you write code, you want the same block of code to run over
   and over again a certain number of times.
- So, instead of adding several almost equal code-lines in a script, we can use loops.

- Loops are used to execute the same block of code again and again, as long as a certain condition is true.


In PHP, we have the following loop types:

   while - loops through a block of code as long as the specified condition is true
   do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
   for - loops through a block of code a specified number of times
   foreach - loops through a block of code for each element in an array




   Foreach Loop

Loops through a block of code for each element in an array or each property in an object.

The most common use of the foreach loop, is to loop through the items of an array.

$colors = ["red", "green", "blue", "yellow"];

foreach ($colors as $x) {
  echo "$x <br>";
}

For every loop iteration, the value of the current array element is assigned to the variabe $x.
The iteration continues until it reaches the last array element.


------
         Keys and Values
         
The array above is an indexed array, where the first item has the key 0, the second has the key 1, and so on.

ASSOCIATIVE arrays are different, associative arrays use named keys that you assign to them,
   and when looping through associative arrays, you might want to
   keep the key as well as the value.

This can be done by specifying both the KEY and VALUE in the foreach defintition, like this:

EXAMPLE
Print both the key and the value from the $members array:

$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  echo "$x : $y <br>";
}

---------

   ALTERNATIVE SYNTAX

The foreach loop syntax can also be written with the `endforeach` statement like this

EXAMPLE
Loop through the items of an indexed array:

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) :
  echo "$x <br>";
endforeach;


*/

echo "<br> ARRAYS! <br>";
$colors = ["red", "green", "blue", "yellow"];

foreach ($colors as $x) {
  echo "$x <br>";
}

echo "<br> ASSOCIATIVE ARRAYS in foreach <br>";
$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// key value pairs

foreach ($members as $x => $y) {
  echo "$x : $y <br>";
}


echo "<br> USING endforeach - alternative syntax <br>";
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) :
  echo "$x <br>";
endforeach;


// continue keyword:
echo "<br> continue keyword <br>";
for ($x = 0; $x < 10; $x++) {
   if ($x == 4) {
      echo "number 4 skipped! <br>";
     continue;
   }
   echo "The number is: $x <br>";
 }
// basically skips out the value

// ===== END OF LOOPS




// ===================== PHP FUNCTIONS! =================
echo "<br>FUNCTIONS!<br>";
/*

The real power of PHP comes from its functions.

PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.

LINKS:
- https://www.php.net/manual/en/indexes.functions.php
- https://en.wikiversity.org/wiki/PHP/25_Essential_Functions



               PHP User Defined Functions
Besides the built-in PHP functions, it is possible to create your own functions.

   A function is a block of statements that can be used repeatedly in a program.
   A function will not execute automatically when a page loads.
   A function will be executed by a call to the function.

Note: A function name must start with a letter or an underscore.



SYNTAX is the same as in JavaScript:
function nameHere(){
   // code here
}


EXAMPLE:
function myMessage() {
  echo "Hello world!";
}


// calling a function:
myMessage();


ARGUMENTS, PARAMETERS, Default ARGUMENT value Syntax is the same as in JavaScript


function myName($name = "Bob"){
   echo "My name is $name";
}

myName(); // My name is Bob
myName("Allyn"); // My name is Allyn


*/

function myName($name = "Bob"){
   echo "My name is $name <br>";
}

myName(); // My name is Bob
myName("Allyn"); // My name is Allyn


/*

      PASSING ARGUMENTS BY REFERENCE

In PHP, arguments are usually passed by value, which means that a copy of the value is used in
the function and the variable that was passed into the function cannot be changed.

When a function argument is passed by reference, changes to the argument also change the variable
   that was passed in.
   
To turn a function argument into a reference, the `&` operator is used:


EXAMPLE:
function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num; // output: 7



*/

echo "<br> Passing Arguments by Reference <br>";
function add_five(&$value) {
   $value += 5;
 }
 
 $num = 2;
 echo "num value: $num (before running the function) <br>";
 add_five($num);
 echo "num value: $num (after running the function) <br>";



/*
   PHP also have REST operator just like in JavaScript!


Variable Number of Arguments
By using the ... operator in front of the function parameter, the function accepts an
   unknown number of arguments.

   This is also called a variadic function.

The variadic function argument becomes an ARRAY.


EXAMPLE
A function that do not know how many arguments it will get:

function sumMyNumbers(...$x) {
   $n = 0;
   $len = count($x); // count number of values in array
   for($i = 0; $i < $len; $i++) {
     $n += $x[$i];
   }
   return $n;
 }
 
 $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
 echo $a;



 REMEMBER THAT SPREAD OPERATOR SHOULD BE ALWAYS THE LAST PARAMETER.

 wrong: function myNumbs(...$x, $y){}
 right: function myNumbs($x, ...$y){}

*/


echo "<br>Spread Operator in PHP!<br>";
function sumMyNumbers(...$x) {
   $n = 0;
   $len = count($x); // count number of values in array
   for($i = 0; $i < $len; $i++) {
     $n += $x[$i];
   }
   return $n;
 }
 
 $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
 echo "sum of all the numbers: $a";




/*

         PHP is a Loosely Typed Language

In the examples above,
notice that we did not have to tell PHP which data type the variable is.

PHP automatically associates a data type to the variable, depending on its value.
Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.

In PHP 7, type declarations were added.
This gives us an option to specify the expected data type when declaring a function,
   and by adding the `strict` declaration, it will throw a "Fatal Error" if the
   data type mismatches.

In the following example we try to send both a number and a string to the function without using `strict`:

EXAMPLE:
function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10




To specify strict we need to set declare(strict_types=1);.
This must be on the very first line of the PHP file.

In the following example we try to send both a number and a string to the function,
   but here we have added the strict declaration:


EXAMPLE:
<?php declare(strict_types=1); // strict requirement

function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is enabled and "5 days" is not an integer, an error will be thrown
?>

 */

// ======== END of Functions



