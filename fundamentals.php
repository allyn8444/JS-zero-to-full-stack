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
   substr(string, index_start, slice_how_many_char)

   Example:
   Start the slice at index 6 and end the slice 5 positions later:
*/
$x = "String Slicing";
echo substr($x, 6, 5);
echo "<br>";



