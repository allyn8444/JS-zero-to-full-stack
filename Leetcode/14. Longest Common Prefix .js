/*


Write a function to find the longest common prefix string amongst an array of strings.

If there is no common prefix, return an empty string "".

 

Example 1:

Input: strs = ["flower","flow","flight"]
Output: "fl"
Example 2:

Input: strs = ["dog","racecar","car"]
Output: ""
Explanation: There is no common prefix among the input strings.
 

Constraints:

1 <= strs.length <= 200
0 <= strs[i].length <= 200
strs[i] consists of only lowercase English letters.




*/

// MY SOLUTION:

var longestCommonPrefix = function (strs) {
  // Check if the array is empty
  if (strs.length === 0) return " ";

  // Initialize variables
  let index = 0;
  let prefix = "";

  // Iterate through each character in the first word (strs[0])
  while (index < strs[0].length) {
    let char = strs[0][index];
    console.log(char);

    // Iterate through each word in the array
    for (let i = 0; i < strs.length; i++) {
      let word = strs[i];
      console.log(word);

      // Check if the character is not present in the current word or if the index is out of bounds
      if (index >= word.length || word[index] !== char) {
        // If condition is met, return the current prefix
        return prefix;
      }
    }

    // If the character is present in all words, add it to the prefix
    prefix += char;
    index++;
  }

  // Return the final prefix
  return prefix;
};


/*

========== E X P L A N A T I O N ==============





*/