<?php
include("connexion.php");
include("header.html");
if( $_POST ){
    extract($_POST);
    if( !empty($pseudo) && !empty($mdp) ){
        /* Pour récupérer, en base de données, l'abonné dont le pseudo a été tapé dans le formulaire 
            on doit exécuter la requête SQL : SELECT * FROM abonne WHERE pseudo = '$pseudo'
            La méthode prepare() de l'objet $pdo permet d'écrire une requête paramétrée (= au lieu de mettre directement
            la valeur du pseudo, on met un paramètre, :pseudo)
        */
        $pdostatement = $pdo->prepare("SELECT * FROM membre WHERE pseudo = :pseudo");

        /* La méthode prepare() retourne un objet PDOStatement qui va lié les paramètres de la requête a des valeurs */
        $pdostatement->bindValue(":pseudo", $pseudo);

        /* Ensuite avec la méthode execute() de l'objet $pdostatement, on va exécuter la requête SQL
            La méthode execute() retourne un booléen (true si la requête s'est bien exécutée, false s'il y a eu une erreur)
        */
        $resultat = $pdostatement->execute();

        /*  La méthode rowCount() retourne le nombre de lignes renvoyées par la requête SQL : ici soit 0 soit 1 */
        if($resultat && $pdostatement->rowCount()){
            /* Les résultats de la requête sont dans l'objet $pdostatement. On peut les récupérer avec 
                    la méthode fetch() : pour récupérer un enregistrement 
                    la méthode fetchAll() : pour récupérer un array de tous les enregistrements */
            $membre = $pdostatement->fetch(PDO::FETCH_ASSOC);
            if( password_verify($mdp,$membre["mdp"])){
                $_SESSION["messages"]["success"][]  = "Bonjour " . $membre["pseudo"] .  ", vous êtes connecté";
                $_SESSION["membre"] = $membre;
                //ici puuisque on est connecte on appel la fonction redirection vers la page profil
            //    redirection("index.php");
            header('Location: index.php');
            } else {
                $_SESSION["messages"]["danger"][] = "Le mot de passe ne correspond pas !";
            }
        } else {
            $_SESSION["messages"]["danger"][] = "Le pseudo n'existe pas !";
        }
    } else {
        $_SESSION["messages"]["danger"][] = "Veuillez saisir le pseudo et le mot de passe !";
    }
}
?>