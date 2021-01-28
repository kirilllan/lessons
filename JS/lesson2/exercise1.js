function fiveRandomNumbers() {
  let times = 5;
  let generatedNumbers = [];
  while (times > 0) {
    --times;
    generatedNumbers.push(Math.round(Math.random() * 1));
  }
  if (generatedNumbers.every(n => n === 1)) {
    generatedNumbers.push('Jackpot! All random numbers are 1 !' +
      'chance of that happening is ' + 1/2**5)}
  if (generatedNumbers.every(n => n === 1)) {
    generatedNumbers.push('Grats! You got five 0\'s which is same' +
      'probability as getting all 1\'s ... but you didn\'t win anythin LOL')}
return generatedNumbers;
}
//alert('Yor random numbers are: ' + fiveRandomNumbers())
//fiveRandomNumbers()