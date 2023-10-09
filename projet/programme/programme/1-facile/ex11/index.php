<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 11 : Les tableaux"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<!-- Exo 11 : Les tableaux
0 : Matthieu
1 : Pierre
2 : Marc
3 : Jean
---------------------
0 : Morgane
1 : Mathilde
2 : Julie -->

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
