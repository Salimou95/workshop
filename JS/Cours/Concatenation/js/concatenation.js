// la concatenation

var annee = 2017;
var futur =3;
var calcul = annee + futur;
console.log(calcul);
document.write(calcul+ " <br> ");

var mois = "7";
var calcul2 =annee + mois;
console.log(calcul2);
document.write(calcul2 + "<br>");

var debutPhrase = "Aujoud'hui ";
var NbStagiares = 12;
var SuitePhrase = " stagiares";
var FinPhrase = "sont présent"; //pas d'espace

// nous souhaitons, afficher la pharse en un seul morceau avec la concatenation
document.write(debutPhrase+NbStagiares+SuitePhrase+" "+FinPhrase);