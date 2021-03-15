/*
"Completed calculator app should be able to perform calculation between 2 numbers (add, subtract, multiply, divide), clearing input fields, and support decimal points"
*/

// came up with this solution + code in like 15 mins,
// thank you, eval =D
// ((i k eval !== secure))

const plus = document.getElementById('plus');
const minus = document.getElementById('minus');
const times = document.getElementById('times');
const divide = document.getElementById('divide');

const input = document.getElementById('input');
const equal = document.getElementById('equal');
const clear = document.getElementById('clear');

let number1 = "";
let number2 = "";

const plusF = () => {
  number2 = number1 + "+";
  number1 = "";
}
const minusF = () => {
  number2 = number1 + "-";
  number1 = "";
}
const timesF = () => {
  number2 = number1 + "*";
  number1 = "";
}
const divideF = () => {
  number2 = number1 + "/";
  number1 = "";
}

function EQ() {
  input.innerText = eval(`${number2}${number1}`);
  number1 = "";
  number2 = "";
  // eval hehehe
}

plus.addEventListener('click', plusF);
minus.addEventListener('click', minusF);
times.addEventListener('click', timesF);
divide.addEventListener('click', divideF);

equal.addEventListener('click', EQ)
clear.addEventListener('click', function() {
  input.innerText = "";
})