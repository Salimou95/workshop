 const NEW = document.getElementById("new_game");

const SOLUTION = document.getElementById("solution");

const PROPOSER = document.getElementById("proposer");

let nombreMystère = null;

let nombreEssai = 0;

// au click sur le bouton jeux

NEW.addEventListener("click", () => {
  document.getElementById("myForm").reset();
  nombreMystère = Math.floor(Math.random() * 51);
  nombreEssai = 0;
  PROPOSER.removeAttribute("disabled");
  console.log(nombreMystère);
});

// au click sur le bouton solution

SOLUTION.addEventListener("click", () => {
  document.getElementById("proposition").value = nombreMystère;
});

//au click sur le bouton proposer

PROPOSER.addEventListener("click", () => {
  if (nombreEssai < 7) {
    nombreEssai++;

    document.getElementById("essai").value = nombreEssai;

    let proposition = document.getElementById("proposition").value;

    console.log(proposition);

    //verifier si le nombre mystère est identique a la proposition

    if (nombreMystère == proposition) {
      document.getElementById("message").value = "Bravo !";
      PROPOSER.setAttribute("disabled", "");
    } else if (nombreMystère < proposition) {
      document.getElementById("message").value = "trop grand !";
    } else {
      document.getElementById("message").value = "trop petit !";
    }

    let reponse = document.getElementById("reponse").value;

    if (reponse == "") {
      document.getElementById("reponse").value = proposition;
    } else {
      document.getElementById("reponse").value =
        document.getElementById("reponse").value + "-" + proposition;
    }
  }
  else{
    PROPOSER.setAttribute("disabled", "");
  };
});
