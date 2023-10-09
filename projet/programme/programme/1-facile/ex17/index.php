<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exercice 17 : TAbleaux complexes"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<!-- Exercice 17 : TAbleaux complexes
Nom : Matthieu
age : 30
sexe : Homme
Note : 1 : 2
Note : 2 : 5
Note : 3 : 15
Note : 4 : 10
La moyenne est de : 8
------------------------
Nom : Marie
age : 32
sexe : Femme
Note : 1 : 10
Note : 2 : 12
Note : 3 : 11
Note : 4 : 11
La moyenne est de : 11
------------------------
Nom : Marc
age : 25
sexe : Homme
Note : 1 : 15
Note : 2 : 5
Note : 3 : 20
Note : 4 : 15
La moyenne est de : 13.75
------------------------
Nom : Mathilde
age : 21
sexe : Femme
Note : 1 : 3
Note : 2 : 6
Note : 3 : 9
Note : 4 : 12
La moyenne est de : 7.5 -->

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
