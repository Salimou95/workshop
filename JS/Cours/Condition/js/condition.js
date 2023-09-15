//-- structure de base IF

if (true){
    // par defaut la condition le IF si ele est vrai on execute ce code
    //  ...code...
    //  ...code...
}

var nb1 = 10;
if (nb1 < 50){
    console.log("nb1 est bien inférieur à 50")
}


if(true){
    //  ...code si vrai
}else{
    //  ...code si faux
}

if(nb1 > 50){
    console.log("nb1 est bien superieur à 50")

}else{
    console.log("nb1 est bien inférieur à 50")

}


var age = parseInt( prompt("Donner votre age"));

if(age >= 18){
    alert("Bienvenue");
}else{
    alert("Vous n'etes pas majeur");
    document.location.href="https://www.google.com/";
}
