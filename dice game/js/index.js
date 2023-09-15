var dice = [1, 2, 3, 4, 5, 6];
var valeur = 0;
var totalpone = 0;
var totalptwo = 0;
var diceImage = document.createElement("IMG");
let activePlayer = 0;

function switchPlayer() {
  if (activePlayer === 0) {
    activePlayer = 1;
  } else {
    activePlayer = 0;
  }
}

document.querySelector("#rollDice").addEventListener("click", () => {
  if (activePlayer == 0) {
    
    var randomDice = dice[Math.floor(Math.random() * dice.length)];
    if (randomDice !== 1) {
      console.log(randomDice);
      valeur += randomDice;
      document.querySelector("#currentpone").innerHTML = valeur;

      if (randomDice == 2) {
        diceImage.setAttribute("src", "../img/dice-2.png");
        document.body.appendChild(diceImage);
      } else if (randomDice == 3) {
        diceImage.setAttribute("src", "../img/dice-3.png");
        document.body.appendChild(diceImage);
      } else if (randomDice == 4) {
        diceImage.setAttribute("src", "../img/dice-4.png");
        document.body.appendChild(diceImage);
      } else if (randomDice == 5) {
        diceImage.setAttribute("src", "../img/dice-5.png");
        document.body.appendChild(diceImage);
      } else if (randomDice == 6) {
        diceImage.setAttribute("src", "../img/dice-6.png");
        document.body.appendChild(diceImage);
      }
    } else {
      valeur = 0;
      document.querySelector("#currentpone").innerHTML = valeur;
      diceImage.setAttribute("src", "../img/dice-1.png");
      document.body.appendChild(diceImage);
      console.log(1);
      switchPlayer(activePlayer);
    }
  } else {
    var randomDice = dice[Math.floor(Math.random() * dice.length)];
    if (randomDice !== 1) {
      console.log(randomDice);
      valeur += randomDice;
      document.querySelector("#currentptwo").innerHTML = valeur;

      if (randomDice == 2) {
        diceImage.setAttribute("src", "../img/dice-2.png");
        document.body.appendChild(diceImage);
      } else if (randomDice == 3) {
        diceImage.setAttribute("src", "../img/dice-3.png");
        document.body.appendChild(diceImage);
      } else if (randomDice == 4) {
        diceImage.setAttribute("src", "../img/dice-4.png");
        document.body.appendChild(diceImage);
      } else if (randomDice == 5) {
        diceImage.setAttribute("src", "../img/dice-5.png");
        document.body.appendChild(diceImage);
      } else if (randomDice == 6) {
        diceImage.setAttribute("src", "../img/dice-6.png");
        document.body.appendChild(diceImage);
      }
    } else {
      valeur = 0;
      document.querySelector("#currentptwo").innerHTML = valeur;
      diceImage.setAttribute("src", "../img/dice-1.png");
      document.body.appendChild(diceImage);
      console.log(1);
      switchPlayer(activePlayer);
    }
  }
});
document.querySelector("#hold").addEventListener("click", () => {
  if (activePlayer == 0) {
    totalpone = totalpone + valeur;
    document.querySelector("#pointTotalpone").innerHTML = totalpone;
    valeur = 0;
    document.querySelector("#currentpone").innerHTML = valeur;
    switchPlayer(activePlayer);
    console.log("numero :  " + activePlayer);

    if (totalpone >= 100) {
      document.querySelector("#rollDice").disabled = "true";
      document.querySelector("#hold").disabled = "true";
      document.querySelector(".player-0").style.backgroundColor = "green";
      document.querySelector(".player-1").style.backgroundColor = "red";
    } else {
    }
  } else {
    totalptwo = totalptwo + valeur;
    document.querySelector("#pointTotalptwo").innerHTML = totalptwo;
    valeur = 0;
    document.querySelector("#currentptwo").innerHTML = valeur;
    switchPlayer(activePlayer);
    console.log("numero :  " + activePlayer);
    if (totalptwo >= 100) {
      document.querySelector("#rollDice").disabled = "true";
      document.querySelector("#hold").disabled = "true";
      document.querySelector(".player-0").style.backgroundColor = "red";
      document.querySelector(".player-1").style.backgroundColor = "green";


      alert("Player two win");
    } else {
    }
  }
});

document.querySelector("#reset").addEventListener("click", () => {
  location.reload();
});

// document.querySelector("#rollDice").addEventListener("click", () => {

//     var randomDice = dice[Math.floor(Math.random() * dice.length)];
//     if(randomDice >1){
//         console.log(randomDice);
//         valeur += randomDice
//         document.querySelector("#currentpone").innerHTML = valeur;

//         if (randomDice == 2) {
//           diceImage.setAttribute("src", "../img/dice-2.png");
//           document.body.appendChild(diceImage);
//         } else if (randomDice == 3) {
//           diceImage.setAttribute("src", "../img/dice-3.png");
//           document.body.appendChild(diceImage);
//         } else if (randomDice == 4) {
//           diceImage.setAttribute("src", "../img/dice-4.png");
//           document.body.appendChild(diceImage);
//         } else if (randomDice == 5) {
//           diceImage.setAttribute("src", "../img/dice-5.png");
//           document.body.appendChild(diceImage);
//         } else if (randomDice == 6) {
//           diceImage.setAttribute("src", "../img/dice-6.png");
//           document.body.appendChild(diceImage);
//         }

//     }
//     else{
//         valeur = 0;
//         document.querySelector("#currentpone").innerHTML = valeur;
//         diceImage.setAttribute("src", "../img/dice-1.png");
//         document.body.appendChild(diceImage);
//         console.log(1);
//     }
// });

// document.querySelector("#hold").addEventListener("click", () => {
//     total = total+ valeur
//     document.querySelector("#pointTotalpone").innerHTML = total;
//     valeur =0 ;
//     document.querySelector("#currentpone").innerHTML = valeur;

// })
