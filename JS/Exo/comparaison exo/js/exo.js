var nb1 = prompt("Inserez un premier nombre");
var nb2 = prompt("Inserez un second nombre");

if((isNaN(nb1)) && (isNaN(nb2))){
if(nb1 == nb2){
    document.write(nb1 + " est égale a "+nb2);
}
else if (nb1 > nb2){
    document.write(nb1 + " est superieure "+nb2);
}
else if (nb1 < nb2){
    document.write(nb1 + " est inferieure "+nb2);
}
else{
    alert("Ajouter un chiffre")
}
}
