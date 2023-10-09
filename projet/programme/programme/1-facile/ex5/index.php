<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 5 : Boucle for"; //Mettre le nom du titre de la page que vous voulez
?>


<!-- mettre ici le code -->
<!-- affichage  -->
<!-- Voici la table de multiplication de 6 : (aleatoire entre 5 et 15)
6 * 1 = 6
6 * 2 = 12
6 * 3 = 18
6 * 4 = 24
6 * 5 = 30
6 * 6 = 36
6 * 7 = 42
6 * 8 = 48
6 * 9 = 54
6 * 10 = 60 -->


<?php

$nb = rand(5,15);

for($i = 1; $i<= 10; $i++){
    echo "$nb*$i = ".$nb*$i."<br>";
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
