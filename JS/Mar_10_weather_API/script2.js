const search = document.querySelector('.search')
const submit = document.querySelector('.submit-it')
const div1 = document.querySelector('.div-1')
const div2 = document.querySelector('.div-2')
const div3 = document.querySelector('.div-3')

const key = "16771ab272cb1d231914340292ac6eae"


 function getIt() {

let searchVal = search.value;
 let api = `http://api.openweathermap.org/data/2.5/weather?q=${searchVal}&appid=${key}`

fetch(api)
  .then(response => {
    let data1 = response.json();
    return data1;
  })
  .then(data => {
      console.log(data)
      div1.innerText = Math.floor(data.main.temp - 273) + '* Celsius'
    })
 }






submit.addEventListener('click', getIt)