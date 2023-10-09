<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 10 : Fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<!-- Exo 10 : Fonctions 
Coucou sans voyelle est Cc -->

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
