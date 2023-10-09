<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 8 : La boucle while"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<!-- Exo 8 : La boucle while
Essaie 1 : 11 est trop petit
Essaie 2 : 3 est trop petit
Essaie 3 : 14 est trop petit
Le chiffre est supérieur à 15 -->

<?php
$a =0 ;
while ($a <= 15) {
    $a++;
    if($a > 15){
        echo "$a est superieur a 15 <br>";
    }
    elseif($a == 15){
        echo "$a  est égal a 15 <br>";
    }
    else{
        echo "$a est trop petit <br>";
    }
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
