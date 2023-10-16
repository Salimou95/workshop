<?php 

class Vehicule{
    // declaration des attributs
    private $marque = "";
    private $couleur = "";
    private $vitesse = 0;
    private $nb_roues = 0;


    // Decalration du constructeur
    public function __construct($marque, $couleur, $vitesse, $nb_roues)
    {
        echo "<p>--Appel du constructeur--</p>";
        $this->marque = $marque;
        $this->couleur = $couleur;
        $this->vitesse = $vitesse;
        $this->nb_roues = $nb_roues;
    }

    public function getCouleur(){
        return $this->couleur;//Lecture  de l'attribut couleur
    }
    public function setCouleur($couleur){
        $this->couleur;//Ecriture  de l'attribut couleur
    }

    public function getMarque(){
        return $this->marque;
    }
    public function setMarque($marque){
        $this->marque;
    }

    public function getVitesse(){
        return $this->vitesse;
    }
    public function setVitesse($vitesse){
        $this->vitesse;
    }

    public function getRoues(){
        return $this->nb_roues;
    }
    public function setRoues($nb_roues){
        if(!is_int($nb_roues)){ //est-ce une valeur numérique
           trigger_error("Le nombre de roues doit etre un nombre entier");
            return;
        }else{
            $this->nb_roues = $nb_roues;
        }
    }


    public function demarrer(){

        // Code de la methode
        echo "<p>Le vehicule de couleur $this->couleur demarre!</p>";
    }

    public function rouler(){
        // Code de la méthode
        echo "<p>Le vehicule roule</p>";
    }


    public function info_vehicule(Vehicule $object_vehicule){
        echo "cette voiture de marque $this->marque a une couleur $this->couleur";
    }
}



?>