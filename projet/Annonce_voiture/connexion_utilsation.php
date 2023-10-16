<!-- <?php ?>-->
<!-- // include("connexion.php");
// $msg ="";
// $resultat = $pdo -> query("SELECT * FROM membre");


// if( $_POST ){
    // extract($_POST);
    // if( !empty($pseudo) && !empty($mdp) ){
        /* Pour récupérer, en base de données, l'abonné dont le pseudo a été tapé dans le formulaire 
            on doit exécuter la requête SQL : SELECT * FROM abonne WHERE pseudo = '$pseudo'
            La méthode prepare() de l'objet $pdo permet d'écrire une requête paramétrée (= au lieu de mettre directement
            la valeur du pseudo, on met un paramètre, :pseudo)
        */
        // $pdostatement = $pdo->prepare("SELECT * FROM membre WHERE pseudo = :pseudo");

        /* La méthode prepare() retourne un objet PDOStatement qui va lié les paramètres de la requête a des valeurs */
        // $pdostatement->bindValue(":pseudo", $pseudo);

        /* Ensuite avec la méthode execute() de l'objet $pdostatement, on va exécuter la requête SQL
            La méthode execute() retourne un booléen (true si la requête s'est bien exécutée, false s'il y a eu une erreur)
        */
        // $resultat = $pdostatement->execute();

        /*  La méthode rowCount() retourne le nombre de lignes renvoyées par la requête SQL : ici soit 0 soit 1 */
        // if($resultat && $pdostatement->rowCount()){
            /* Les résultats de la requête sont dans l'objet $pdostatement. On peut les récupérer avec 
                    la méthode fetch() : pour récupérer un enregistrement 
                    la méthode fetchAll() : pour récupérer un array de tous les enregistrements */
            // $membre = $pdostatement->fetch(PDO::FETCH_ASSOC);
            // if( password_verify($mdp,$membre["mdp"])){
                // $_SESSION["messages"]["success"][]  = "Bonjour " . $membre["pseudo"] .  ", vous êtes connecté";
                // $_SESSION["membre"] = $membre;
                //ici puuisque on est connecte on appel la fonction redirection vers la page profil
            //    redirection("index.php");
            // header('Location: index.php');
            // } else {
                // $_SESSION["messages"]["danger"][] = "Le mot de passe ne correspond pas !";
            // }
        // } else {
            // $_SESSION["messages"]["danger"][] = "Le pseudo n'existe pas !";
        // }
    // } else {
        // $_SESSION["messages"]["danger"][] = "Veuillez saisir le pseudo et le mot de passe !";
    // }
// }
    ?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <?php include("header.php") ?>
    <main>
        <section class="col-10 m-auto">
            <div class="p-3 mb-2 bg-primary text-white mb-4 rounded">
                <h1>Formulaire de connexion</h1>
            </div>
            <div class="col-11 m-auto">
                <form action="formconnex.php" method="post">
                    <input type="text" placeholder="Pseudo" name="pseudo" class="form-control">
                    <input type="password" placeholder="Mot de passe" name="mdp" class="form-control">
                    <button type="submit" class="btn btn-primary">Se connecter</button>
                </form>
            </div>
        </section>
    </main>
    <?php include('footer.html')?>
</body>
</html>