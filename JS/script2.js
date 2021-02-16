const usersDate = document.querySelector("#usersDate");
const usersDate2 = document.querySelector("#usersDate2");
const usersEvent = document.querySelector("#usersEvent");
const submitButton1 = document.querySelector(".submit-Button1");
const calculated = document.querySelector(".calculated");
const calculated2 = document.querySelector(".calculated2");
const calculated3 = document.querySelector(".calculated3");
const calculated4 = document.querySelector(".calculated4");
const calculated5 = document.querySelector(".calculated5");

submitButton1.addEventListener("click", () => {
  
  if (!usersDate2.value) {
    calculated.textContent = 
    Math.ceil( (new Date(usersDate.value || "") - Date.now() )  /(1000 * 3600 * 24)) + ' days left until ' +  (usersEvent.value ? usersEvent.value : 'end date');
  
    calculated2.textContent = 'Counting only weekdays: '+bizDays(usersDate.value) + ' days left';

  }
  

  if (usersDate2.value && usersDate.value) {

    calculated3.textContent = 
    Math.ceil( (new Date(usersDate.value || "") - new Date(usersDate2.value) )  /(1000 * 3600 * 24)) + ' days left until ' +  (usersEvent.value ? usersEvent.value : 'end date') + '(start date specified)';

  }
  if (usersDate2.value && usersDate.value) {

    calculated4.textContent ='Counting only weekdays: '+bizDays2(usersDate.value, usersDate2.value) + ' days left'+ '(start date specified)';

  }

  countdown()
});

function bizDays(usersVal) {
  const firstDate = new Date(Date.now());
  const secondDate = new Date(usersVal);
  const daysWithOutWeekEnd = [];
  for (let currentDate = new Date(firstDate); currentDate <= secondDate; currentDate.setDate(currentDate.getDate() + 1)) {
    if (currentDate.getDay() != 0 && currentDate.getDay() != 6) {
      daysWithOutWeekEnd.push(new Date(currentDate));
    }
  }
  return daysWithOutWeekEnd.length;
}
function bizDays2(usersVal, usersVal2) {
  const firstDate = new Date(usersVal2);
  const secondDate = new Date(usersVal);
  const daysWithOutWeekEnd = [];
  for (let currentDate = new Date(firstDate); currentDate <= secondDate; currentDate.setDate(currentDate.getDate() + 1)) {
    if (currentDate.getDay() != 0 && currentDate.getDay() != 6) {
      daysWithOutWeekEnd.push(new Date(currentDate));
    }
  }
  return daysWithOutWeekEnd.length;
}

function countdown() {
  var countDownDate = new Date(usersDate.value).getTime();
  var x = setInterval(function() {
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  calculated5.innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
  if (distance < 0) {
    clearInterval(x);
    calculated5.innerHTML = "EXPIRED";
  }
}, 1000);
}