//  l'operateur ET ou AND : &&
if(( prenomSaisie === prenom) && (ageSaisie === age)){
    // ...code...
    //  Je ne rentre if que si les condition sont vrai
}
if((A)&&(B)){}
// => si A est Faux et B est Vrai => Faux
// => si A est Vrai et B est Faux => Faux
// => si A est Faux et B est Faux => Faux
// => si A est Vrai et B est Vrai => Vrai

// L'operateur OU ou OR : ||(alt gr + 6)
if((A)||(B)){}
// => si A est Faux et B est Faux => Faux
// => si A est Faux et B est Vrai => Vrai
// => si A est Vrai et B est Faux => Vrai
// => si A est Vrai et B est Vrai => Vrai

/*l'opérateur "|" signifie : le contraire de  */

var utilsateurlog = true;
if(utilsateurlog){
    // si l'utilisateur n'est pas loggé.
}
    //ce qui revient a écrire
if(utilsateurlog == false){
    // si l'utilsateur n'est pas loggé
}