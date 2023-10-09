<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo3 : Les tests"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<!-- afficher -->
<!-- le chiffre est : aleatoire(entre 1 et 20) -->
<!-- il est compri entre : 1 et 5 ou 6 et 10 ou  11 et 15 ou16 et 20 " -->
<!-- utiliser rand et if -->

<?php

$chiffre = rand(1,20);
echo $chiffre;

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
