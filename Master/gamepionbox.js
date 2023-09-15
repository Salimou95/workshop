class PionBox {
  constructor(id, colors) {
    this.elmt = document.getElementById(id);
    this.clicked = null;
    this.desiner(this.elmt, colors);
  }

  desiner(parent, colors) {
    colors.forEach((color) => {
      let pion = new Pion(parent, color);
      this.elmt.appendChild(pion.div);
      pion.div.addEventListener("click", () => {
        if (this.clicked) {
          this.clicked.style.boxShadow = null;
        }
        selectedcolor = pion.div.style.backgroundColor;
        this.clicked = pion.div;
        pion.div.style.boxShadow = "0px 1px 10px 10px";
      });
    });
  }
}
