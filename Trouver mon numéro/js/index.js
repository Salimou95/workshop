var nbInconnu = Math.floor(Math.random() * 21);
var tour = 20;
var score =0;

// const GUESS = document.getElementsByClassName("guess");
const BTN = document.querySelector(".check");

BTN.addEventListener("click", () => {
    var nb = document.querySelector(".guess").value;
    if(nb >1 && nb<=20){
        if (nb > nbInconnu) {
            document.querySelector(".message").innerHTML = "Chiffre trop haut";
            
        } else if (nb < nbInconnu) {
            document.querySelector(".message").innerHTML = "Chiffre trop bas";
        } else {
            document.querySelector(".message").innerHTML = "Bien jouer";
            document.querySelector(".highscore").innerHTML = tour;
            document.querySelector(".number").innerHTML = nbInconnu;
            document.body.style.backgroundColor = "rgb(75, 211, 75)";

    }tour--;
    }
    else{
        document.querySelector(".message").innerHTML = "Entrez un chiffre entre 1 et 20";

    }
    document.querySelector(".label-score").innerHTML = tour;
}


);

//  for(var i=20; i>=0; i--){

// console.log(i)
//  }
