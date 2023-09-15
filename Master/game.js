const NEWGAME = document.getElementById("newGame");
let pionBox = new PionBox("pionBox", COLOR);

NEWGAME.addEventListener("click", () => {
  let level = document.getElementById("level").value;
  let rowContainer = document.getElementById("rowContainer");
  rowContainer.innerHTML = " ";
  for (let i = 0; i < LEVEL[level].nombreDeRange; i++) {
    let row = new Row(rowContainer, level);
  }
});
