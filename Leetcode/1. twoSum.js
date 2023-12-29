/*

Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.

You may assume that each input would have exactly one solution, and you may not use the same element twice.

You can return the answer in any order.


Example 1:

Input: nums = [2,7,11,15], target = 9
Output: [0,1]
Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].
Example 2:

Input: nums = [3,2,4], target = 6
Output: [1,2]
Example 3:

Input: nums = [3,3], target = 6
Output: [0,1]



*/

// MY SOLUTION:

let test1 = [2, 7, 11, 15];
let tes2 = [3, 2, 4];

let target1 = 9;
let target2 = 6;

var twoSum = function (nums, target) {
     for (let i = 0; i < nums.length; i++) {
       let firstNum = nums[i];

       for (let j = i + 1; j < nums.length; j++) {
         let secondNum = nums[j];
         
         if (firstNum + secondNum === target) {
           return [i, j];
         }
       }
     }
   };

console.log(twoSum(test1, target1));
