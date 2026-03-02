// const name = "John"; // String
// const age = 30; // Number
// const rating = 4.5; // Number
// const isCool = true; // Boolean
// const x = null; // Object
// const y = undefined; // Unidentified
// let z; // Unidentified

// console.log("My name is " + name + " and my age is " + age);
// console.log(`My name is ${name}`);

// const s = "Junard, Mark, Datus";
// console.log(s.split(", "));

// // Arrays
// const fruits = ["grapes", "oranges", "apples"];
// fruits.push("mangoes"); // add to end
// fruits.unshift("Watermelon"); // add to start
// fruits.pop(); // Deletes the last item/value

// console.log(Array.isArray(fruits)); // to check if there is something in the array
// console.log(Array.isArray("Hello"));
// console.log(fruits.indexOf("grapes"));

// console.log(fruits);

// const person = {
//   firstName: "John",
//   lastName: "Doe",
//   age: 30,
//   hobbies: ["music", "movies", "sports"],
//   address: { street: "50 main st", city: "Boston", state: "MA" },
// };

// console.log(person);
// console.log(person.firstName, person.hobbies);
// console.log(person.hobbies[2]);
// console.log(person.address.city);

// const {
//   firstName,
//   lastName,
//   hobbies: [music],
//   address: { street },
// } = person;

// console.log(music);
// console.log(street);

// person.email = "sample@email.com";
// console.log(person);

const todos = [
  {
    id: 1,
    text: "Take them out",
    isCompleted: true,
  },
  {
    id: 2,
    text: "Take them out",
    isCompleted: false,
  },
  {
    id: 3,
    text: "Take them out",
    isCompleted: true,
  },
];

for (let i = 0; i < todos.length; i++) {
  console.log(todos[i].id);
}

for (let todo of todos) {
  console.log(todo.isCompleted);
}

todos.forEach(function (todo) {
  console.log(todo.text);
});

// if one line only
todos.forEach((todo) => console.log(todo.text));

const todoId = todos.map(function (todo) {
  return todo.id;
});

console.log(todoId);

const todoCompleted = todos
  .filter(function (todo) {
    return todo.isCompleted === true;
  })
  .map(function (todo) {
    return todo.text;
  });

console.log(todoCompleted);

// console.log(todos);
// const todoJSON = JSON.stringify(todos);
// console.log(todoJSON);

// // For Loop
// for (let i = 0; i <= 10; i++) {
//   console.log(`For Loop Number: ${i}`);
// }

// // While Loop
// let i = 0;
// while (i < 10) {
//   console.log(`While Loop Number: ${i}`);
//   i++;
// }

// While Loop Example
let password = "";
let attempts = 0;

while (password !== "1234" && attempts < 5) {
  password = prompt("Enter password:");
  attempts++;
}

if (password == "1234") {
  console.log(`Access Granted! It is your attempt no. ${attempts}`);
} else {
  console.log("Try Again!");
}
