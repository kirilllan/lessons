const _license_plate = document.getElementById('license-plate');
const _car_maker = document.getElementById('car-maker');
const _model = document.getElementById('model');
const _price = document.getElementById('price');
const _color = document.getElementById('color');
const submit = document.getElementsByClassName('submit')[0];
const addCar = document.getElementsByClassName('search-by-license-plate')[0];
const car_models = document.getElementsByClassName('car-models')[0];
const _clear = document.getElementsByClassName('clear')[0];

submit.addEventListener('click', function(event) {
  event.preventDefault;
  console.table({
    license:_license_plate.value,
    carMaker: _car_maker.value,
    model: _model.value,
    price: _price.value,
    color: color.value});

    car_models.appendChild(
      document.createTextNode(`
      license:${_license_plate.value||' '},
    carMaker: ${_car_maker.value||' '},
    model: ${_model.value||' '},
    price: ${_price.value||' '},
    color: ${color.value||' '}
      `)
    )
    car_models.appendChild(
      document.createElement('br')
    )
})


_clear.addEventListener('click',function() {
  car_models.innerHTML = '';
  _license_plate.value = '';
  _model.value = '';
  _price.value = '';
})