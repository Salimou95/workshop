<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : Variables et Ternaires"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<!-- mettre ici le code -->
<!-- afficher avec la fonction ternaire -->
<!-- Marie à 30 ans et c'est une femme
Pierre à 32 ans et c'est un homme -->



<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
