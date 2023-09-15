var prix = prompt("Inserer le prix");
var tva = 20;
prix =parseFloat(prix)
var prixttc =parseFloat( prix +(prix/100 )*tva ) ;
console.log(prixttc);
