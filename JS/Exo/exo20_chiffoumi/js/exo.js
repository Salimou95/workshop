// var ciseaux = 0;
// var pierre = 1;
// var feuille = 2;

// let nb = Math.floor(Math.random() * 2);
// console.log(nb)

// for (i = 0; i <= 6; i++) {
//     var choix = parseInt(prompt("Choisir entre pierre, feuile ou ciseaux "));

//   if (nb===choix ) {
//     alert("égalité");

//     break;
//   } else if (nb>choix) {
//     alert("perdu");
//     break;
//   } else if (nb < choix) {
//     alert("gagner");
//     break
//   }
// }

var chiffoumi = ["pierre", "feuille", "ciseaux"];

var random = chiffoumi[Math.floor(Math.random() * chiffoumi.length)];
console.log(random);
"pierre" > "ciseaux";
"ciseaux" > "feuille";
"feuille" > "pierre";

for (i = 0; i = i; i) {
  var choix = prompt("Choisir entre pierre, feuile ou ciseaux ");

  if (random === choix) {
    alert("égalité");

    break;
  } else if (random > choix) {
    alert("perdu");
    break;
  } else if (random < choix) {
    alert("gagner");
    break;
  }
}
