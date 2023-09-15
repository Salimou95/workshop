var moyenne = parseFloat(prompt("Ajouter la moyenne du candidat"))

if(moyenne < 10){
 document.write(" il est recalé");
}
else if(moyenne = 10 || moyenne < 12){
 document.write(" il est reçu");
}
else if(moyenne = 12 || moyenne > 12){
 document.write(" il est reçu avec mention");
}