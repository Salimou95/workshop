<?php
include("connexion.php");
include("header.html");
?>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    </head>
<body>
    <?php
    $msg ="";
    if($_POST){

        if (empty($_POST['nom'])) {
            $msg .= "<div class='bg-danger-subtle p-2 col-10 m-auto rounded'><p class='text-danger'>Entrez le nom du propriétaire</div></p><br>";
        }

        if (empty($_POST['prenom'])) {
            $msg .= "<div class='bg-danger-subtle p-2 col-10 m-auto rounded'><p class='text-danger'>Entrez le prenom du propriétaire </div></p><br>";
        }
        if (empty($_POST['adresse'])) {
            $msg .= "<div class='bg-danger-subtle p-2 col-10 m-auto rounded'><p class='text-danger'>Entrez l'adresse du propriétaire' </div></p><br>";
        }


        else{
            $resultat = $pdo -> prepare("INSERT INTO proprietaire ( nom, prenom, adresse) VALUES (:nom, :prenom, :adresse)");
            $resultat-> bindParam(":nom",$_POST['nom'] );
            $resultat-> bindParam(":prenom", $_POST['prenom']);
            $resultat-> bindParam(":adresse", $_POST['adresse']);
            $msg = "<div class='bg-success-subtle p-2 col-10 m-auto rounded'><p class='text-success'>Propriétaire ajouté avec succés </div></p><br>";
            header("Refresh:5 ; url=list.php?table=proprietaire");
         
        }

    }
    echo $msg;
    ?>
    <section class="col-10 m-auto">
    <form action="ajoutproprietaire.php" method="post">
        <div class="input-group mb-6 ">
            <label class="input-group-text col-6">Nom</label>
            <input type="text" name="nom" class="form-control"> 
        </div>
        <div class="input-group mb-6">
            <label class="input-group-text col-6">Prénom</label>
            <input type="text" name="prenom" class="form-control">
        </div>
        <div class="input-group mb-6">
            <label class="input-group-text col-6">Adresse</label>
            <input type="text" name="adresse" class="form-control">
        </div>
        <button type="submit" name="add" class="btn btn-primary">Ajouter</button>
    </form>
    </section>
</body>
</html>