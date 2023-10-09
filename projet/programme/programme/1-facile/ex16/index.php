<?php ob_start(); //NE PAS MODIFIER 
$titre = "exo 16 : Tableau de tableaux assoficatifs"; //Mettre le nom du titre de la page que vous voulez
?>


<!-- mettre ici le code -->
<!-- exo 16 : Tableau de tableaux assoficatifs
Nom : Matthieu
age : 30
sexe : Homme
------------------------
Nom : Marie
age : 32
sexe : Femme
------------------------
Nom : Marc
age : 25
sexe : Homme
------------------------
Nom : Mathilde
age : 21
sexe : Femme
------------------------ -->

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
