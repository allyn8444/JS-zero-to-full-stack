/* TYPE CONVERSION



*/

let money = "50";
console.log(typeof money); // string
// typeof returns the data type of the passed in variable (or value)

// convert STRING to INTEGER. 3 WAYS
//money = parseInt(money);
// console.log(typeof money); // number

// 2nd way is using this:
// money = +money;
// console.log(typeof money); // number

// 3rd way is using Number()
money = Number(money);
console.log(typeof money); // number
