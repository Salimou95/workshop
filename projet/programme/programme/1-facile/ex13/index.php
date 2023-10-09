<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 13 : Tableaux et fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<!-- Exo 13 : Tableaux et fonctions
La moyenne des notes de Marc est de 13
La moyenne des notes de Matthieu est de 9.8571428571429
La moyenne des notes de Pierre est de 7.5
La moyenne des notes de Paul est de 8.5 -->

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
