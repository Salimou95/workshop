<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 9 : Fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<!-- Exo 9 : Fonctions
Le chiffre 5 n'est pas pair
Le chiffre 122 est pair -->

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
