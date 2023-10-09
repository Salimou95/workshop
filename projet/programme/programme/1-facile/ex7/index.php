<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 7 : Le Switch"; //Mettre le nom du titre de la page que vous voulez
?>


<!-- mettre ici le code -->
<!-- Exo 7 : Le Switch
Le mois 2 (de 1 à 12) en chiffres correspond au mois Février en lettres -->

<?php

$mois = rand(1,6);

switch ($mois) {
    case '1':
        echo "Janvier";
        break;
    case '2':
        echo "Fevrier";
        break;
    case '3':
        echo "Mars";
        break;
    case '4':
        echo "Avril";
        break;
    case '5':
        echo "Mai";
        break;
    case '6':
        echo "juin";
        break;
    
}

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
