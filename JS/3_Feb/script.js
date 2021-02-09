const number_of_bulbs = 10;
const delay = 1500;
const bulbs = document.getElementById('bulbs')
let counter = 0;
let arrayOfBulbs = [];

while (counter < number_of_bulbs) {
  const newEl = document.createElement('div');
  newEl.className = 'bulb';
  console.log(document.getElementById('bulbs'))
  document.getElementById('bulbs').appendChild(newEl);

  arrayOfBulbs[counter] = false;
  counter++;
}

counter = 0;
arrayOfBulbs[counter] = true;
document.getElementsByClassName('bulb')[counter].classList.add('active');

setInterval(() => {
  arrayOfBulbs[counter] = false;
  document.getElementsByClassName('bulb')[counter].classList.remove('active'); 
  if (counter < number_of_bulbs - 1) {
    counter++;
  } else {
    counter = 0;
  }
  arrayOfBulbs[counter] = true;
  document.getElementsByClassName('bulb')[counter].classList.add('active');
}, delay)


