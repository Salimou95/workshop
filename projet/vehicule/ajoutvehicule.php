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
    $errors = false;
    $msg ="";
    if($_POST){

        if (empty($_POST['immatriculation'])) {
            $msg .= "<div class='bg-danger-subtle p-2 col-10 m-auto rounded'><p class='text-danger'>Entrez l'imatriculation du véhicule </div></p><br>";
        }

        if (empty($_POST['marque'])) {
            $msg .= "<div class='bg-danger-subtle p-2 col-10 m-auto rounded'><p class='text-danger'>Entrez la marque du véhicule </div></p><br>";
        }
        if (empty($_POST['modele'])) {
            $msg .= "<div class='bg-danger-subtle p-2 col-10 m-auto rounded'><p class='text-danger'>Entrez le modèle du véhicule </div></p><br>";
        }
        if (empty($_POST['couleur'])) {
            $msg .= "<div class='bg-danger-subtle p-2 col-10 m-auto rounded'><p class='text-danger'>Entrez la couleur du véhicule </div></p><br>";
        }

        else{
            $resultat = $pdo -> prepare("INSERT INTO vehicules ( immatriculation, marque, modele, couleur) VALUES (:immatriculation, :marque, :modele, :couleur)");
            $resultat-> bindParam(":immatriculation",$_POST['immatriculation'] );
            $resultat-> bindParam(":marque", $_POST['marque']);
            $resultat-> bindParam(":modele", $_POST['modele']);
            $resultat-> bindParam(":couleur", $_POST['couleur']);
            $resultat-> execute();
            $msg = "<div class='bg-success-subtle p-2 col-10 m-auto rounded'><p class='text-success'>Véhicule ajouté avec succés </div></p><br>";
            try{
            $resultat-> execute();

            }catch(Exception $e){
                $errors = "Error". $e->getMessage();
            }
        }

    }
    echo $msg;
    ?>
    <section class="col-10 m-auto">
    <form action="ajoutvehicule.php" method="post">
        <div class="input-group mb-6 ">
            <label class="input-group-text col-6">Immatriculation</label>
            <input type="text" name="immatriculation" class="form-control" required="true"> 
        </div>
        <div class="input-group mb-6">
            <label class="input-group-text col-6">Marque</label>
            <input type="text" name="marque" class="form-control" value="">
        </div>
        <div class="input-group mb-6">
            <label class="input-group-text col-6">Modèle</label>
            <input type="text" name="modele" class="form-control">
        </div>
        <div class="input-group mb-6">
            <label class="input-group-text col-6">Couleur</label>
            <input type="text" name="couleur" class="form-control">
        </div>
        <button type="submit" name="add" class="btn btn-primary">Ajouter</button>
    </form>
    </section>
</body>
</html>