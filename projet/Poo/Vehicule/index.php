<?php
// Appel de la class vehicule qui se trouve dans le dossier class
include("class/vehicule.class.php");
// Instantion de la classe vehicule 
$ma_voiture = new Vehicule("Fiat","bleu", 5,6);
// $la_voiture_du_voisin = new Vehicule("peug","bleu", 5,6);
// Appel d'une methode de la classe véhicule
// $ma_voiture->demarrer();
// Afficher la couleur de ma voiture
// echo $ma_voiture->couleur;

// echo "Ma voiture est la marque ".$ma_voiture->getMarque();
// echo $ma_voiture->getVitesse();
// echo $ma_voiture->getMarque();
echo $ma_voiture->setRoues(10)."<br>";

// echo $ma_voiture->info_vehicule($la_voiture_du_voisin); 

// echo $ma_voiture->__construct($marque, $couleur, $vitesse, $nb_roues);
?>