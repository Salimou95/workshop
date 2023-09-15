// les boucles
// la boucle FOR
//  les 3 parametre (arguments)
/* 
1-initialiser un compteur a partir d'une valeur de départ (ici i), par défaut le compteur est la variable i
2-la codition a verifier qui doit etre vrai(true)
3-le 'pas d'incrementation (combien j'ajoute a chaque tour, généralement i donc i++)
*/

for(var i =1; i <= 10; i++){
    document.write("<p> instruction excuté " + i + "</p>" )
}

// la boucle while (tant que)
var j = 1;
while (j<=10){
    document.write("<p> instruction excuté " + j + "</p>" );
    j++;
}


while (s<=2000){
 
    document.write("<p>Sur le compte il y'a " + s + "</p>" );
    s=s+a;
    tps++;
}
document.write("<p> le temps total pour avoir la somme voulue est de "+ tps +"mois </p>")



var mois= 0;
for (var salaire = 1000; salaire < 2000; salaire+=50){
    mois++;
}
document.write("<h3> il aura fallu "+ mois + "</h3>");