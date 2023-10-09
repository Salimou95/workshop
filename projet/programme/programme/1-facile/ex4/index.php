<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : Les tests"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<!-- afficher  -->
<!-- Chiffre 1 : 86   (aleatoire entre 10 et 100)
Chiffre 2 : 37          (aleatoire entre 10 et 100)
La valeur absolue de 86 - 37 est comprise entre 25 et 75
49 -->

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
