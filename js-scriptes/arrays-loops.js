console.log("Skaitļi no 11 līdz 20:");
for (let i = 11; i <= 20; i++) {
    console.log(i);
}

console.log("Skaitļi no 20 līdz 11:");
for (let i = 20; i >= 11; i--) {
    console.log(i);
}

let draugi = ["Jānis", "Antra", "Māris", "Laura", "Inese"];

console.log("Pirmais draugs:", draugi[0]);
console.log("Trešais draugs:", draugi[2]);

let garums = draugi.length;

for (let i = 0; i < garums; i++) {
    console.log(`${i + 1}. ${draugi[i]}`);
}
