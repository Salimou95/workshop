<?php
include("connexion.php");
?>
        <?php 
                if($_POST){
                    $modifie = $pdo->prepare("UPDATE proprietaire SET commentaire= :commentaire WHERE proprietaire_id = :id_proprietaire");
                    $modifie-> bindParam(":commentaire", $_POST['comm']);
                    $modifie->execute();   
                }else{
                echo "pas bon post";
                }?>
        


