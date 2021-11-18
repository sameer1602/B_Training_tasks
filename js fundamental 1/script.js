////linking Javascript//////
/*

let js = 'amazing';
console.log(40 + 8 + 23 - 10); 
console.log("Benchmark");
console.log(250);

// Variable Diclarations

let Country="India";
let Continent="Asia";
let Employee="500";

console.log(Country);
console.log(Continent);
console.log(Employee);


  //   Data Types
let javascriptIsFun=true;
//console.log(typeof true);
console.log(typeof javascriptIsFun);
//console.log(typeof 23);
//console.log(typeof 'Sameer');
javascriptIsFun='YES!';
console.log(typeof javascriptIsFun);

let year;
console.log(year);
console.log(typeof year);
year=1991;
console.log(typeof year);
console.log(typeof null);

////////////////////////////
//let,Const and var

let age=25;
age=31;
const birthYear=1996;
//birthYear=1998;
// const job;
var job='programmer';
job = 'Manager';

lastName='Shaikh';
console.log(lastName);

/////////////////////////

//Basic Operators

const ageSam=2021-1996;
const ageVini=2021-1997;
console.log(ageSam,ageVini);
console.log(ageSam+2,ageSam/10,2**3)
//2**3 means 2 to the power of 3=2*2*2


// Math operators 

const firstName='Sameer';
const lastName='Shaikh';
console.log(firstName +' '+ lastName);

// Assignment operators

let x= 10 + 5;  // 15
x += 10;  //x = x + 10
x *= 4;
x++;
x--;
x--;

console.log(x);

// comparison operators

console.log(ageSam > ageVini);  //>, <, >=, <=
console.log(ageVini >= 18); 

const isFullAge = ageVini >= 18;


console.log(now - 1996 > now - 2021);


///////////////////////////
//operator Precedence

const now = 2037;
const ageSam = now - 1996;
const ageVini = now - 2021;
console.log(now - 1991 > now - 2021);   

let x, y;
x = y = 25 - 10 - 5;
console.log(x, y);
const averageAge = ageSam + ageVini / 2
console.log(ageSam, ageVini,averageAge);


//////////////////////////////////////////////
//Coding Challenge #1

const massMark = 95;
const heightMark = 1.88;
const massJohn = 85;
const heightJohn = 1.76;

const BMIMark = massMark / heightMark ** 2;
const BMIJohn = massJohn / (heightJohn * heightJohn);
const markHeightBMI = BMIMark > BMIJohn;
console.log(BMIMark, BMIJohn, markHeightBMI);

 // Strings and Templates 

const firstName = 'sameer';
const job='Project Trainee';
const birthYear = 1996;
const year = 2021;
const sameer = "I'm " + firstName + ' , a ' + (year - birthYear) + ' years old ' + job +' !';
console.log(sameer);

const sameerNew = `I'm ${firstName}, a ${year - birthYear} year old ${job}!`;
console.log(sameerNew);
console.log('Just a regular string....');
console.log('String with\n\ multiple \n\ lines');
console.log('string multiple lines');

// if-else Statements

const age = 15;
if (age >= 18) {
  console.log('Sameer can start driving license 🚗');
} else {
  const yearsLeft = 18 - age;
  console.log(`Sameer is too young. Wait another ${yearsLeft} years :)`);
}
const birthYear = 2012;
let century;
if (birthYear <= 2000) {
  century = 20;
} else {
  century = 21;
}
console.log(century);



/////////////////////////////
// Coding challenge 2

const massMark = 78;
const heightMark = 1.69;
const massJohn = 92;
const heightJohn = 1.95;
// const massMark = 95;
// const heightMark = 1.88;
// const massJohn = 85;
// const heightJohn = 1.76;
const BMIMark = massMark / heightMark ** 2;
const BMIJohn = massJohn / (heightJohn * heightJohn);
console.log(BMIMark, BMIJohn);
if (BMIMark > BMIJohn) {
  console.log(`Mark's BMI (${BMIMark}) is higher than John's (${BMIJohn})!`)
} else {
  console.log(`John's BMI (${BMIJohn}) is higher than Marks's (${BMIMark})!`)
}



// Type conversion
const inputYear = '1991';
console.log(Number(inputYear), inputYear);
console.log(Number(inputYear) + 18);
console.log(Number('Jonas'));
console.log(typeof NaN);
console.log(String(23), 23);

// Type coercion

console.log('I am ' + 23 + ' years old');
console.log('23' - '10' - 3);
console.log('23' / '2');
let n = '1' + 1; // '11'
n = n - 1;
console.log(n);



// Truthy and Falsy Values
// 5 falsy values: 0, '', undefined, null, NaN
console.log(Boolean(0));
console.log(Boolean(undefined));
console.log(Boolean('Jonas'));
console.log(Boolean({}));
console.log(Boolean(''));
const money = 100;
if (money) {
  console.log("Don't spend it all ;)");
} else {
  console.log('You should get a job!');
}
let height = 0;
if (height) {
  console.log('YAY! Height is defined');
} else {
  console.log('Height is UNDEFINED');
}

// Equality Operators: == vs. ===
const age = '18';
if (age === 18) console.log('You just became an adult :D (strict)');
if (age == 18) console.log('You just became an adult :D (loose)');
const favourite = Number(prompt("What's your favourite number?"));
console.log(favourite);
console.log(typeof favourite);
if (favourite === 23) { // 22 === 23 -> FALSE
  console.log('Cool! 23 is an amzaing number!')
} else if (favourite === 7) {
  console.log('7 is also a cool number')
} else if (favourite === 9) {
  console.log('9 is also a cool number')
} else {
  console.log('Number is not 23 or 7 or 9')
}
if (favourite !== 23) console.log('Why not 23?');

// Logical Operators
const hasDriversLicense = true; // A
const hasGoodVision = true; // B
console.log(hasDriversLicense && hasGoodVision);
console.log(hasDriversLicense || hasGoodVision);
console.log(!hasDriversLicense);
// if (hasDriversLicense && hasGoodVision) {
//   console.log('Sarah is able to drive!');
// } else {
//   console.log('Someone else should drive...');
// }
const isTired = false; // C
console.log(hasDriversLicense && hasGoodVision && isTired);
if (hasDriversLicense && hasGoodVision && !isTired) {
  console.log('Sarah is able to drive!');
} else {
  console.log('Someone else should drive...');
}



// Coding Challenge #3

const scoreDolphins = (97 + 112 + 80) / 3;
const scoreKoalas = (109 + 95 + 50) / 3;
console.log(scoreDolphins, scoreKoalas);
if (scoreDolphins > scoreKoalas && scoreDolphins >= 100) {
  console.log('Dolphins win the trophy 🏆');
} else if (scoreKoalas > scoreDolphins && scoreKoalas >= 100) {
  console.log('Koalas win the trophy 🏆');
} else if (scoreDolphins === scoreKoalas && scoreDolphins >= 100 && scoreKoalas >= 100) {
  console.log('Both win the trophy!');
} else {
  console.log('No one wins the trophy ');
}
*/

