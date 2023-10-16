<?php
include("connexion.php");
$msg = "";
?>
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
    <?php include("header.html")?>
    <main class="mt-5">
    <?php
    if($_POST){
    

            if(empty($_POST['marque'])){
                $msg.=  "<div class='container bg-danger-subtle  mb-3 p-3 text-danger'><p>remplisez le champs marque</p></div>";
            }

            if(empty($_POST['km'])){
                $msg.=  "<div class='container bg-danger-subtle  mb-3 p-3 text-danger'><p>remplisez le champs Kilometrage</p></div>";
            }

           if(empty($_POST['tarif'])){
                $msg.=  "<div class='container bg-danger-subtle  mb-3 p-3 text-danger'><p>remplisez le champs tarif</p></div>";
           }
           if(empty($_POST['photo'])){
                $msg.=  "<div class='container bg-danger-subtle  mb-3 p-3 text-danger'><p>remplisez le champs photo</p></div>";
           }

            else{
                $req = $pdo->prepare("INSERT INTO voiture(marque, kilometrage, tarif, photo, fiche) VALUES(:marque, :kilometrage, :tarif, :photo, :fiche) ");
                $req -> bindParam(':marque', $_POST['marque'], PDO::PARAM_STR);
                $req -> bindParam(':kilometrage', $_POST['km'], PDO::PARAM_STR);
                $req -> bindParam(':tarif', $_POST['tarif'], PDO::PARAM_STR);
                $req -> bindParam(':photo', $_POST['photo'], PDO::PARAM_STR);
                $req -> bindParam(':fiche', $_POST['fiche'], PDO::PARAM_STR);
                $req -> execute();
                $msg.=  "<div class='container bg-success-subtle  mb-3 p-3 text-success'><p>Voiture ajoutée ✔✔✔</p></div>";

        }
    }
        echo $msg;
    ?>
        <section class="col-10 m-auto">
            <div class="p-3 mb-2 bg-primary text-white mb-4 rounded">
                <h1>Ajouter un véhicule</h1>
            </div>
            <div class="col-11 m-auto">
                <form action="ajout_vehicule.php" method="post">
                    <input type="text" placeholder="marque" name="marque" class="form-control">
                    <input type="number" placeholder="Kilometrage" name="km" class="form-control">
                    <input type="number" placeholder="tarif" name="tarif" class="form-control">
                    <input type="file" placeholder="photo" name="photo" class="form-control">
                    <input type="file" placeholder="fiche" name="fiche" class="form-control">
                    <button type="submit" class="btn btn-primary">S'incrire</button>
                </form>
            </div>
        </section>
    </main>
    <?php include('footer.html')?>
</body>
</html>