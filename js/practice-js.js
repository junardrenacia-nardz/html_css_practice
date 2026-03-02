let input = prompt("Enter a number");
let count = 0;
let value = 0;
let odd = [];

// for loop
// for (let i = 1; i <= input; i++) {
//   count = i;

//   let divThree = count % 3;
//   let divFive = count % 5;
//   let even = count % 2;

//   if (divThree == 0 && divFive == 0) {
//     console.log("FizzBuzz");
//   } else if (divFive == 0) {
//     console.log("Buzz");
//   } else if (divThree == 0) {
//     console.log("Fizz");
//   } else {
//     console.log(count);
//   }

//   if (even == 0) {
//     value += count;
//   } else {
//     odd.push(count);
//   }
// }

// while loop
let i = 1;

while (i <= input) {
  count = i;

  let divThree = count % 3;
  let divFive = count % 5;
  let even = count % 2;

  if (divThree == 0 && divFive == 0) {
    console.log("FizzBuzz");
  } else if (divFive == 0) {
    console.log("Buzz");
  } else if (divThree == 0) {
    console.log("Fizz");
  } else {
    console.log(count);
  }

  if (even == 0) {
    value += count;
  } else {
    odd.push(count);
  }

  i++;
}

console.log(``);
console.log(`Sum of Even Numbers: ${value}`);
console.log(`Count of odd numbers: ${odd.length}`);
