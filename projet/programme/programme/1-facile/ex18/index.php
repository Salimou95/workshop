<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exercice 18 : Méthode GET"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<!-- Exercice 18 : Méthode GET formulaire
Pseudo :
Age :
valider
 -->

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
