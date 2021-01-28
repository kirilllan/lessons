// #1
let rands1or0 = (numsAmount = 5) => {
  let count = 0,
    numsAmountLocal = numsAmount,
    numbersArr = [];
  while (count < numsAmountLocal) {
    ++count;
    numbersArr.push(Math.round(Math.random() * 1));
  }
  return numbersArr;
};
//rands1or0(5) //how many numbers would you like?
// #2
let functionWithPrizes = () => {
  let fiveRands = rands1or0(5);
  let zeroesCount = fiveRands.filter((n) => n === 0).length;
  let onesCount = fiveRands.filter((n) => n === 1).length;
  let strOfTimes = `Zero occurred ${zeroesCount} times\
 and one occurred ${onesCount} times`;
  return zeroesCount === 5
    ? "Gz 5 zeros"
    : onesCount === 5
    ? "Gz you won, 5 ones!"
    : onesCount === 4
    ? "You get miniprize, 4 ones"
    : strOfTimes;
};
//functionWithPrizes()
//#3
let guaranteedJackpot = () => {
  let roundsAmount = 0;
  let functionWithPrizes_results = functionWithPrizes();
  while (functionWithPrizes_results !== "Gz you won, 5 ones!") {
    ++roundsAmount;
    functionWithPrizes_results = functionWithPrizes();
    console.log(functionWithPrizes_results);
  }
  return `${functionWithPrizes_results} it took ${roundsAmount} tries.`;
};
//guaranteedJackpot()
