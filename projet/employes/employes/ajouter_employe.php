<?php
    // Session
    session_start();

    // Connexion à la BDD
    $pdo = new PDO('mysql:host=localhost;dbname=societe', 'root', '', array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ));

    // Traiter / Vérifier les infos récupérées dans le formulaire
    $message = '';

    if ($_POST) {
        // Verification prenom :
        if (empty($_POST['prenom'])) {
            $message .= '<div class="alert alert-danger">Veuillez renseigner un prenom</div>';
        }

        // Verification nom :
        if (empty($_POST['nom'])) {
            $message .= '<div class="alert alert-danger">Veuillez renseigner un nom</div>';
        }

        // Verification sexe :
        if(empty($_POST['sexe'])) {
            $message .= '<div class="alert alert-danger">Veuillez saisir un sexe</div>';
        }

        // Verification service :
        if(empty($_POST['service'])) {
            $message .= '<div class="alert alert-danger">Veuillez saisir un service</div>';
        }

        // Verification date d'embauche :
        if(empty($_POST['date_embauche'])) {
            $message .= '<div class="alert alert-danger">Veuillez saisir une date d\'embauche</div>';
        }

        // Verification salaire :
        if(empty($_POST['salaire'])) {
            $message .= '<div class="alert alert-danger">Veuillez saisir un salaire</div>';
        }

        // Si tout est ok alors
        if(empty($message)) {
            $resultat = $pdo -> prepare("
                INSERT INTO employes
                (prenom, nom, sexe, service, date_embauche, salaire)
                VALUES
                (:prenom, :nom, :sexe, :service, :date_embauche, :salaire)
            ");

            $resultat -> bindParam(':prenom', $_POST['prenom'], PDO::PARAM_STR);
            $resultat -> bindParam(':nom', $_POST['nom'], PDO::PARAM_STR);
            $resultat -> bindParam(':sexe', $_POST['sexe'], PDO::PARAM_STR);
            $resultat -> bindParam(':service', $_POST['service'], PDO::PARAM_STR);
            $resultat -> bindParam(':date_embauche', $_POST['date_embauche'], PDO::PARAM_STR);
            $resultat -> bindParam(':salaire', $_POST['salaire'], PDO::PARAM_STR);

            if ($resultat -> execute()) {
                $message .= '<div class="alert alert-success">Félicitations, votre logement est bien pris en compte</div>';

                // Redirection vers la liste de tous les employes :
                header('location:affichage.php');
            } else {
                $message .= '<div class="alert alert-danger">Erreur, veuillez réesayer ultérieurement</div>';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Révisions SQL/PHP</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row  alert-warning p-2 mb-5">
        <h1>Nouveau Employé</h1></div>
        <?php echo $message; ?>
        <form method="post" class="card p-4">
        <div class="row">
            <div class="form-group col-md-6">
                <label>Prenom :</label>
                <input type="text" name="prenom" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label>Nom :</label>
                <input type="text" name="nom" class="form-control">
            </div>
            </div>
            <div class="row">
            <div class="form-group col-md-6">
                <label>Sexe :</label>
                <select name="sexe" class="form-control">
                    <option value="m">Masculin</option>
                    <option value="f">Feminin</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label>Service :</label>
                <select name="service" class="form-control">
                    <option value="direction">Direction</option>
                    <option value="commercial">Commercial</option>
                    <option value="production">Production</option>
                    <option value="secretariat">Secretariat</option>
                    <option value="comptabilite">Comptabilite</option>
                    <option value="informatique">Informatique</option>
                    <option value="communication">Communication</option>
                    <option value="juridique">Juridique</option>
                    <option value="assistant">Assistant</option>
                </select>
            </div>
            </div>
            <div class="form-group">
                <label>Date d'embauche :</label>
                <input type="text" name="date_embauche" class="form-control" placeholder="AAAA-MM-JJ">
            </div>
            <div class="form-group">
                <label>Salaire :</label>
                <input type="text" name="salaire" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-warning btn-block" value="Ajouter">
            </div>
        </form>
    </div>
</body>
</html>
