// pour crer une fonction il faut
// placer le mot clef fonction
// donner un nom a notre fonction
// lui passe des eventuels paramatre
// ouvrir les accolades
// exemple ecrire une fonction direBonjour qui affiche le message bonjour qui affiche le message bonjour dans la console ou le document

function direBonjour() {
  document.write("Bonjour parfait inconnu <br>");
}
// pour appeler une fonction on tape directements son nom
direBonjour();

function direBonjourprenom(prenom) {
  document.write("Bonjour " + prenom+"<br>");
}

direBonjourprenom();

// exemple definir une fonction calcul qui prend deux parametre a + b
// la fonction doit faire la multiplication des  deux parametre et retourne le resultat

function multiplication(a, b) {
  var resultat = a * b;
  return;
}
multiplication();
4;
let resultat = multiplication(7, 5);

function reverseAray(tab) {
  return tab.reverse();
}
tab = [10, 55, 52];
console.log(reverseAray(tab));


function languagePrefere(lang = "JavaScript"){
    document.write(`Mon langage prefere est le ${lang}` + "<br>");
    document.write("Mon langage prefere est le" +lang + "<br>");
    
}
languagePrefere();
languagePrefere("HTML");


const maDate = new Date()
console.log(maDate);
document.write(maDate.getMonth)