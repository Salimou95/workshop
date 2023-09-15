// Syntaxe de base

// Commentaire sur une ligne;

/* ici un commentaire sur plusieur ligne
*/

//--1: déclarer une variable en js
// var prenom;

// --2 affecter une valeur a une variable
// prenom ="anouar";

// var prenom = "anouar";

// --3: une instruction se termine toujours par un point virgule, il est possible d'ecrire plusieur instruction sur une seule ligne
// instruction_1;
// instruction_2; inst_3;

// --4 afficher une boite de dialogue
// alert("super tu es arriver sur mon site");

alert("Super tu es arriver sur mon site");

//--5 s'afficher dans la console
//sonsole.log(prenom);
// Ici on affiche la valeut prenom
// console.log(prenom);

//--6 demande a l'utilisateur une valeur
//prompt("question : on est quel jour?")

var jour= prompt("question : on est quel jour?");
console.log(jour);

// --7 js est sensible a la case
// mavariable en camel case :  maVariable bt snake : ma_variable

//--8 une variable ne peut commencer par un chiffre, ne doit contenir que des caracteres alphanumériques 


//les types de variables

//--1 chaine de caractere

var vacances = "2017";
var destination = "australie";

//--2 un nombre entier (int)

var annee = 2017;

//-3 un nombre décimal (float)
var nombre = 5.32;

//--4 un bolean (vrai ou faux)
var unboleen = false

//--5les constantes

/* la déclaration de const permet de creer une constante accesible uniquement en lecture, contrairement a une variable sa valeur ne plus etre modifier par une reaffection plus bas dans le code.*/

const pays = "France"; // chaine de caractere
const AN = 2023; //nombre

//--6 typeof-permet de connaitre le type de ma variable

console.log(vacances);
console.log(typeof vacances);
console.log(annee);
console.log(typeof annee);
console.log(unboleen);
console.log(typeof unboleen);

// on peut convertir une variable de type number en string et aussi string en number avec la fonction native de JS

// la fonction parseint() renvoie un entier a partir d'une chaine de caractére

var unChiffre ="12";
console.log(unChiffre);
console.log(typeof unChiffre);

// string to number
unChiffre = parseInt(unChiffre);
console.log(unChiffre);
console.log(typeof unChiffre);

// je ré affecte une valeur
var unChiffre ="12.22";
console.log(unChiffre);
console.log(typeof unChiffre);

// string to float
unChiffre = parseFloat(unChiffre);
console.log(unChiffre);
console.log(typeof unChiffre);

// number to string
var nb_en_lettres = 258;
console.log(nb_en_lettres);
console.log(typeof nb_en_lettres);

var nb_en_lettres = nb_en_lettres.toString();
console.log(nb_en_lettres);
console.log(typeof nb_en_lettres);