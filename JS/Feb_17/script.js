!(function(){


window.addEventListener('DOMContentLoaded', e => {
  this.executeScript = function (id,name,age,isStaff) {

    let table = document.getElementsByClassName('greenTable 1')[0];
    let row = table.insertRow(0);
    let cell1 = row.insertCell(0);
    let cell2 = row.insertCell(1);
    let cell3 = row.insertCell(2);
    let cell4 = row.insertCell(3);
    this.id = id;
    this.name = name;
    this.age = age;
    this.isStaff = isStaff;
    cell1.innerHTML = this.id;
    cell2.innerHTML = this.name;
    cell3.innerHTML = this.age;
    cell4.innerHTML = this.isStaff;

  }

 }) // end of DOMContentLoaded -> [executeScript]


 

})();

setInterval(classAdd,5000)
function classAdd() {document.querySelectorAll('table tr').forEach(e => e.classList.add('item'))
}

const getUsers = () => [
  {
    studentNo: 123,
    name: 'harry',
    age: 15
  },
  {
    studentNo: 234,
    name: 'Ron',
    age: 16
  },
  {
    studentNo: 135,
    name: 'Hermione',
    age: 17
  },
  {
    studentNo: -1,
    name: 'Snape',
    age: 55
  },
  {
    studentNo: -1,
    name: 'Hagrid',
    age: 65
  }
];
function addUser(userInfo) {

}
for (let i = 0; i < 5; i++) {
  addUser();
}
function getOldest(array) {
  // expects an array of userObj as parameter
  let Y_Y = getUsers();
  let maxAge = -Infinity;
  for (let i = 0; i < Y_Y.length; i++) {
    if(Y_Y[i].age > maxAge) maxAge = Y_Y[i].age;
  }
  return maxAge;
}


/* document.getElementById('sort').addEventListener('click') */
