// almost finished
// didnt use a lot of time on this
// 
// ...

let band1 = {
  members: {
      current: [
          { name: 'Sascha', age: 59, plays: ['vocals', 'synth', 'guitar', 'bass'] },
          { name: 'Lucia', age: 49, plays: ['vocals', 'synth'] },
          { name: 'Jules', age: 53, plays: ['guitar', 'bass', 'synth'] },
          { name: 'Steve', age: 55, plays: ['guitar'] }
      ],
      past: [
          { name: 'Raymond', age: 57, plays: ['vocals', 'synth'] },
          { name: 'En', age: 52, plays: ['vocals', 'drums', 'guitar', 'synth'] },
          { name: 'Gunter', age: 57, plays: ['guitar', 'synth'] }
      ]
  }
};
let expected1 = {
  members: {
      // current: no changes
      current: [
          { name: 'Sascha', age: 59, plays: ['vocals', 'synth', 'guitar', 'bass'] },
          { name: 'Lucia', age: 49, plays: ['vocals', 'synth'] },
          { name: 'Jules', age: 53, plays: ['guitar', 'bass', 'synth'] },
          { name: 'Steve', age: 55, plays: ['guitar'] }
      ],
      // past: no changes
      past: [
          { name: 'Raymond', age: 57, plays: ['vocals', 'synth'] },
          { name: 'En', age: 52, plays: ['vocals', 'drums', 'guitar', 'synth'] },
          { name: 'Gunter', age: 57, plays: ['guitar', 'synth'] }
      ],
      // ORDER MATTERS!
      // 1. Sort age first by DESC
      // 2. then sort name by ASC
      // 3. lowercase all the names
      all: [
          "sascha",
          "gunter",
          "raymond",
          "steve",
          "jules",
          "en",
          "lucia"
      ]
  },
  // plays order doesn't matter
  plays: {
      // name order doesn't matter
      // but show the name in lowercase
      vocals: ["sascha", "lucia", "raymond", "en"],
      synth: ["sascha", "lucia", "jules", "raymond", "en", "gunter"],
      guitar: ["sascha", "jules", "steve", "en", "gunter"],
      bass: ["sascha", "jules"],
      drums: ["en"]
  }
};
let names = _ => {
let currentNames = [];
for(let entry of Object.entries(band1)) {
  entry[1].current.forEach(nam => currentNames.push(`${nam.name}${nam.age}`));
}
for(let entry of Object.entries(band1)) {
  entry[1].past.forEach(nam => currentNames.push(`${nam.name}${nam.age}`));
}
let age_and_name_sort = currentNames.sort((a, b) => { // use return
if (Number(b.match(/\d+/).toString()) === Number(a.match(/\d+/).toString())) {return -1}
else {return Number(b.match(/\d+/).toString()) - Number(a.match(/\d+/).toString());} 
})
return [age_and_name_sort.join(' ').replace(/\d+/g, '').replace(/\s/g, ', ').toLowerCase()];
}
//   names()
let plays = _ => {
let currentPlays = [];
let obj = {};
for (let entry of Object.entries(band1)) {
  entry[1].current.forEach(nam => currentPlays.push(`${nam.plays}`.split(' ')));
}
let instrumentType = [...new Set(currentPlays.flat().map(el=>[...new Set(el.split(','))]).flat())];
for (let ii of instrumentType) {
  obj[ii] = [];
}
for (let entry of Object.entries(band1)) {
  entry[1].current.forEach(nam => nam.plays.forEach(val => {
    obj[val].includes(nam.name) ? '' : obj[val].push(nam.name.toLowerCase())
  })) 
}

return obj
}
//  plays()

let neww = Object.assign({}, band1)
neww.all = names();
neww.plays = plays();
console.log(neww.all);
console.log(neww.plays);
console.log(neww)