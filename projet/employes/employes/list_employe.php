<?php
    // Connexion à la BDD
    $pdo = new PDO('mysql:host=localhost;dbname=societe', 'root', '', array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ));

    // Récupérer les données
    $resultat = $pdo -> query("SELECT * FROM employes");
    $resultat->execute();
    $employes = $resultat -> fetchAll(PDO::FETCH_ASSOC);//ici on a utilisé fetchAll() donc on peut afficher les valeurs par foreach(), on a pas besoin de boucle while()

    if(isset($_GET["supprimer"])){
        $supprimer = $pdo->prepare("DELETE FROM employes WHERE id_employes = ?");
        $supprimer->bindValue(1, $_GET["supprimer"]);
        $supprimer->execute();
        // header("location:" . "affichage.php");
    }
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Link Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Révisions SQL/PHP</title>
</head>
<body>
<div class="container">
<div class="row mt-4 mb-4 alert alert-warning">
            <div class="col-8">
                <h1 class="colh1">Liste des employés</h1>
            </div>
            <div class="col-4">
                <a href="ajouter_employe.php" class="btn btn-warning mt-2">Ajouter un nouvel employe</a>
            </div>
        </div>
   
   
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Sexe</th>
            <th>Service</th>
            <th>Date embauche</th>
            <th>Salaire</th>
            <th>Modification</th>
            <th>Suppression</th>
        </tr>
        </thead>
        <tbody>
            <!-- on va utiliser boucle foreach ici pour afficher le contenu des resultats parce que on a fait fecthAll() en haut-->
            <?php foreach($employes as $l) : ?>
                <tr>
                    <?php foreach($l as $key => $value) {?><!--ici on utilise foreach parce qu'on a plusieurs champs a recuperer mais on peut directement avec $employes['nom'].....-->
                        <td>
                            <?= $value ?>
                        </td>
                    <?php } ?>
                    <td>
                        <a class="btn btn-warning" href="modification.php?edit=<?= $l["id_employes"] ?>">Modifier</a>
                    </td>
                    <td>
                    <!-- ajouter code javascript pour afficher un message pour confirmer la suppression afin d'eviter les fautes de frappes -->
                        <a class="btn btn-danger"  onclick="if(window.confirm('Voulez-vous vraiment supprimer ?')){return true;}else{return false;} " href="?supprimer=<?= $l["id_employes"] ?>">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
    <!-- Script Font Awesome -->
    <script src="https://kit.fontawesome.com/56e3d96be8.js" crossorigin="anonymous"></script>
</body>
</html>
