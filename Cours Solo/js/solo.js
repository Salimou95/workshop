// const currentYear = 2022;
// const birthyear = prompt("Quel est votre année de naissance ?");

// if (birthyear <= 13) {
//   console.log("Lilo & Stitch");
// } else if (birthyear > 13 && birthyear < 18) {
//   console.log("Matrix");
// } else{
//   console.log("Evil Dead");
// }


// const a = prompt("Entrez un premier nombre");
// const b = prompt("Entrez un second nombre");

// var resultat = a*b;
// console.log(resultat);

// const a = prompt("Entrez un premier nombre");
// const b = prompt("Entrez un second nombre");
// const result = a * b;
// let signe;
 
// if (isNaN(result)) {
//   console.log(`Opération impossible: ${a}x${b}`);
// } else {
//   if (result >= 0) {
//     signe = "positif";
//   } else {
//     signe = "négatif";
//   }
//   console.log(`${a}x${b}=${result} est ${signe}`);
// }

// let chiffre = prompt("Entrez un nombre");
// if (chiffre > 10 || chiffre < 0) {
//   console.log("Le nombre n'est pas entre 0 et 10");
// } else {
//   for (let i = chiffre; i >= 0; i--) {
//     console.log(i);
//   }
// }

let guess = 8;
let chiffre = prompt("Inserez un chiffre")

if (chiffre == guess) {
  console.log("Vous avez trouvez le 8");
} else if (chiffre > guess) {
  console.log("le chiffre est trop grand");
} else if (chiffre < guess) {
  console.log("le chiffre est trop petit");
}