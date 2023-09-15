// var nb = parseInt(prompt("Inserez un nombre entre 50 à 100"));

// while (nb >= 50 && nb <= 100) {
//  console.log(nb);
//  }
// while (i = nb) {
//     var nb = parseInt(prompt("Inserez un nombre entre 50 à 100"));
    
//   console.log(nb);
// }
// while(j=nb){
//      if (j >= 50) {
//         console.log("Vous avez choisi le numero"+nb)
//     }else if (j <=100) {
//         console.log("Vous avez chosi un nombre plus petit que 50");
//     }
//     else{
//         console.log("Vous avez choisi un nombre plus grand que 100");
//     }
// }

var nombre=0;
while((nombre <50) || (nombre >100)){
    nombre = Number(prompt("entrer un numéro entre 50 et 100"));
}
document.write("le nombre choisie est "+ nombre + " entre 50 et 100");