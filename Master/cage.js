class Cage {
  constructor(parent) {
    this.cage = document.createElement("div");
    this.cage.className = "cage";

    this.ajouterCage(parent);
  }
  ajouterCage(parent) {
    parent.appendChild(this.cage);
  }
}

class Position {
  constructor(parent) {
    this.pos = document.createElement("div");
    this.pos.className = "pos";

    this.ajouterPosition(parent);
  }
  ajouterPosition(parent) {
    parent.appendChild(this.pos);
  }
}
