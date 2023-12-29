/*

Given a non-empty array of integers nums, every element appears twice except for one. Find that single one.

You must implement a solution with a linear runtime complexity and use only constant extra space.

 

Example 1:

Input: nums = [2,2,1]
Output: 1
Example 2:

Input: nums = [4,1,2,1,2]
Output: 4
Example 3:

Input: nums = [1]
Output: 1
 

Constraints:

1 <= nums.length <= 3 * 104
-3 * 104 <= nums[i] <= 3 * 104
Each element in the array appears twice except for one element which appears only once.



*/

// My Solution:

var singleNumber = function (nums) {
  for (let i = 0; i < nums.length; i++) {
    for (let j = i + 1; j < nums.length; j++) {
      if (nums[i] === nums[j]) {
        // Remove the element at index j
        nums.splice(j, 1);
        // Remove the element at index i
        nums.splice(i, 1);
        // Decrement i to stay at the current index
        i--;
        // Decrement j to stay at the current index
        j--;
        break; // Break out of the inner loop since we found a duplicate
      }
    }
  }
  return nums[0];
};

let nums = [4, 1, 2, 1, 2];
console.log(singleNumber(nums));

/*
   
   ======= EXPLANATION ======


   Here's what each part of the code does:

1.
Outer Loop (for loop with i):
     The outer loop (for loop with i) iterates over each element of the array nums.

2.
Inner Loop (for loop with j):
     The inner loop (for loop with j) starts from the index i + 1 and iterates over
     the remaining elements in the array.

3.
Duplicate Check (if statement):
     The if statement checks if the element at index i is equal to the element at index j, indicating a duplicate.

4.
Removing Duplicates (splice method):
     If a duplicate is found, the splice method is used to remove the element at index j and the element at index i.

5.
Adjusting Indices (i-- and j--):
Since we removed two elements from the array, we decrement both i and j to stay at the current index.

6.
Break Statement (break):
     The break statement is used to exit the inner loop as soon as a duplicate is found.
     This ensures that each pair of duplicates is removed only once.

Lastly.
Return Result (return nums[0]):
     After the loops, the function returns the first element of the modified array,
     assuming that there is only one unique element remaining.


The overall goal of the function is to remove duplicates from the array, and it assumes
that there will be only one unique element remaining after the removal process.
   
   
   */
