class Row {
  constructor(parent, level) {
    this.row = document.createElement("div");
    this.row.className = "row";

    this.leftSide = document.createElement("div");
    this.leftSide.className = "left";

    this.rightSide = document.createElement("div");
    this.rightSide.className = "right";

    this.desinerLaGrilleDeJeu(parent, level);
  }
  desinerLaGrilleDeJeu(parent, level) {
    parent.appendChild(this.row);
    this.row.appendChild(this.leftSide);
    this.row.appendChild(this.rightSide);
    for (let i = 0; i < LEVEL[level].nombreDeCage; i++) {
      let cage = new Cage(this.leftSide);
      new Position(this.rightSide);
    }
  }
}
