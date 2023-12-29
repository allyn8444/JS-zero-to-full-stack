/*

Given an integer x, return true if x is a palindrome, and false otherwise.


Example 1:

Input: x = 121
Output: true
Explanation: 121 reads as 121 from left to right and from right to left.
Example 2:

Input: x = -121
Output: false
Explanation: From left to right, it reads -121. From right to left, it becomes 121-. Therefore it is not a palindrome.
Example 3:

Input: x = 10
Output: false
Explanation: Reads 01 from right to left. Therefore it is not a palindrome.


*/


// MY SOLUTION:

var isPalindrome = function (x) {
     let reversedNumber = 0;
     let num = x;
     while (num > 0) {
       reversedNumber = reversedNumber * 10 + (num % 10);
       num = Math.floor(num / 10);
     }
   
     if (reversedNumber === x) {
       return true;
     } else {
       return false;
     }
   };
   
   console.log(isPalindrome(10));


/*

=========== E X P L A N A T I O N ==========

In this part of code:

 while (num > 0) {
       reversedNumber = reversedNumber * 10 + (num % 10);
       num = Math.floor(num / 10);
     }


Example:
const x = 12345;

// Iteration 1: reversedNumber = 0 * 10 + 5 = 5
               num = 1234
// Iteration 2: reversedNumber = 5 * 10 + 4 = 54
               num = 123
// Iteration 3: reversedNumber = 54 * 10 + 3 = 543
               num = 12
// Iteration 4: reversedNumber = 543 * 10 + 2 = 5432
               num = 1
// Iteration 5: reversedNumber = 5432 * 10 + 1 = 54321
               num = 0

When num = 0, our while loop stops, returning the final value of reversedNumber


*/