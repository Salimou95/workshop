<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 6 : Boucle for"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<!-- Exo 6 : Boucle for
Voici le cumul des 5 (nombre aleatoire entre 5 et 15)premiers nombres (sens inverse):
Etape : 1 - resultat = 5
Etape : 2 - resultat = 9
Etape : 3 - resultat = 12
Etape : 4 - resultat = 14
Etape : 5 - resultat = 15 -->

<?php
    $nb = rand(5,15);
for($i=0; $i<= 5; $i++){
    $nb = $nb+10-1 . "<br>";
    echo $nb;
}

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
