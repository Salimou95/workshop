// l'operateur de comparaison == signifie egale  à x
// il permet de verifier que les valeurs de 2  variable sont identique 

var nb1 = 123;
var nb2 = "123";
console.log(nb1 == nb2); // return true

// l'operateur de comparaison === signifie  strictement egale a x 
// il permet de vérifier le type et la valeur 
console.log(nb1 === nb2);//return false

// l'operateur != signifie different de .. en valeur
console.log(nb1 != nb2);//return false

// l'operateur != signifie strictement different de .. en valeur
console.log(nb1 !== nb2);//return true

var prenom = "Salimou";
var age = 23; 
var mdp = 1234;

var prenominsert = prompt("Donner votre prenom");
// var ageinsert = parseInt( prompt("Donner votre age"));
// var mdpinsert = parseInt( prompt("Donner votre mdp"));
// if(prenominsert == prenom && ageinsert == age){
//     alert("Bienvenue " + prenominsert);
// }else{
//     alert("Erreur !!!");
// }
    // alert("Bienvenue " + prenominsert);


if(prenominsert == prenom){
    var ageinsert = parseInt( prompt("Donner votre age"));
if(ageinsert == age){
    var mdpinsert = parseInt( prompt("Donner votre mdp"));
}
    else{
        alert("Erreur age !!!");}
if(mdp == mdpinsert){
}
    else{
        alert("Erreur mdp !!!");}
}
    else{
        alert("Erreur prenom !!!");
}
