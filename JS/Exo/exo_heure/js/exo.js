// let heure = parseInt(prompt("Ajouter une heure"));
// let minute = parseInt(prompt("Ajouter une minute"));
// let seconde = parseInt(prompt("Ajouter une seconde"));



// if( seconde != "null" ){
//  seconde = seconde+ 1;
// }
// if(seconde > 59){
//     minute = minute+ 1;
//     seconde = 0;
// }
// if(minute > 59){
//     heure = heure+ 1;
//     minute = 0;
// }
// if(heure > 23){
//     heure = 0;

// }
// console.log(heure+ "h"+minute+"m"+seconde+"s");

var heure = prompt("entrez l'heure");
var minute = prompt("entrez les minutes");
var seconde = prompt("entrez les seconde");

// on test les cas d'erreur

if((heure>=0)&&(heure<=23)&&(minute>=0)&&(minute<=59)&&(seconde>=0)&&(seconde<=59)){
//  on incrémente les secondes
    seconde++;
    if (seconde === 60){
        minute++;
        seconde=0;
        if(minute === 60){
            minute=0;
            heure++;
            if(heure === 24){
                heure=0;
            }
        }
    }
}else {
    // heure incorrecte
    document.write("heure incorrecte")
}
console.log(heure + "h" + minute + "m" + seconde + "s");