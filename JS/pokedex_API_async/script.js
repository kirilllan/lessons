;
const anchors = document.getElementsByClassName('anchors')[0];
const pokecontainer = document.getElementsByClassName('pokecointainer')[0];

const API_URL = "https://pokeapi.co/api/v2/pokemon?offset=0&limit=10";
// limit can be changed to a number of your liking.

async function functio(){
  let response = await fetch(API_URL);
  return response.json();  
}

functio().then(jsonData => jsonData.results.forEach(r => {
  let anchor = document.createElement('a');
  anchor.innerText = r.name;
  anchor.setAttribute('thisname', r.name);
  anchor.setAttribute("href", "javascript: pokeData()")
  anchors.appendChild(anchor);
  let br = document.createElement('br');
  anchors.appendChild(br);
}))

function pokeData() {
  // kind of "void" ?
}

document.addEventListener('click', function(e) {
  if (e.target.tagName.toLowerCase() === 'a') {
    async function getPokeData() {
      let response = await fetch(`https://pokeapi.co/api/v2/pokemon/${e.target.attributes[0].value}`);
      return response.json();
    }
    getPokeData().then(jsonData => {
      console.log(jsonData);
      pokecontainer.innerHTML = `<img src="${jsonData.sprites.front_default}"\>`
    });
  }
})