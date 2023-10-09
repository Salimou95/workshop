<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exercice 14 : Tableau de tableaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<!-- Exercice 14 : Tableau de tableaux
La moyenne des notes du 0 eme élément est de 13
La moyenne des notes du 1 eme élément est de 9.8571428571429
La moyenne des notes du 2 eme élément est de 7.5
La moyenne des notes du 3 eme élément est de 8.5
La moyenne des notes du 0 eme élément est de 13
La moyenne des notes du 1 eme élément est de 9.8571428571429
La moyenne des notes du 2 eme élément est de 7.5
La moyenne des notes du 3 eme élément est de 8.5 -->

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
