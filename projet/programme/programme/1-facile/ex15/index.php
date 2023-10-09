<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exercice 15 : Tableaux assoficatifs"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<!-- Exercice 15 : Tableaux assoficatifs
Nom : Matthieu
age : 30
sexe : Homme
-------------------
Nom : Marie
age : 32
sexe : Femme -->

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
