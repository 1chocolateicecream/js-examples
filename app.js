//1. uzdevums
let radius = 5;
console.log(radius);

let area = Math.PI * radius * radius; 
let circumference = 2 * Math.PI * radius; 

console.log("Laukums: " + area.toFixed(2)); 
console.log("Apkārtmērs: " + circumference.toFixed(2));

//2. uzdevums
let age = 20;

if (age>=18) {
    console.log("Tu esi tiesīgs balsot.");
} else {
    console.log("Tu neesi tiesīgs balsot.");
}

//3. uzdevums 
let numbers = [5, 10, 15, 20, 5];
let sum = 0;

for (let i = 0; i < numbers.length; i++) {
    sum += numbers[i];
}

let average = sum / numbers.length;

console.log("Summa: " + sum);
console.log("Vidējā vērtība: " + average);

//4. uzdevums
function findMax(num1, num2) {
    return num1 > num2 ? num1 : num2;
}

console.log(findMax(7, 5)); // Izvade: 7  
console.log(findMax(7, 10)); // Izvade: 10

//5. uzdevums
let inputString = "sveiki";

function reverseString(str) {
    // izmantot reverse metodi
    return str.split('').reverse().join('');
}

console.log("Oriģināls: " + inputString);
console.log("Apgriezts: " + reverseString(inputString));