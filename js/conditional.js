const x = 10;

// Triple sign, must be same in values and data type
if (x === 10) {
  console.log("x is 10");
}

const color = x > 10 ? "People" : "Animals";
console.log(color);

switch (color) {
  case "red":
    console.log("it is a color");
    break;
  case "People":
    console.log("They are People");
    break;
  case "Animals":
    console.log("They are animals");
    break;
  default:
    console.log("wala lang ito");
}

// FUNCTIONS
// console inside the function
function Nums(num1, num2) {
  console.log(num1 + num2);
}

Nums(2, 20);

// console outside the function (return)
function Name(name1, name2) {
  return [name1, name2];
}

console.log(Name("Junard", "Datus"));

// with Default Values
function NumsWtDefault(val1 = 1, val2 = 3) {
  console.log(`The sum of the numbers is ${val1 + val2}`);
}

NumsWtDefault(); // If no values declared, the function will use the default values

// Function using Arrows

const Average = (num1 = 90, num2 = 85) => {
  return (num1 + num2) / 2; // or if 1 line, put it with no return and no brackets
};

console.log(`The student's average is ${Average()}`);

console.log(window);
