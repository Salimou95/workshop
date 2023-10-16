<?php
include("connexion.php");
$pdostat = $pdo->query("SELECT * FROM voiture");
$pdostat->setFetchMode(PDO::FETCH_ASSOC) ;
// include('formconnex.php');
// echo $membre;

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
    <?php include("header.php")?>
    <main>
        <section class="col-10 m-auto">
            <div class="p-2 bg-primary-subtle text-emphasis mb-4 mt-4 rounded">
                <h1>La liste de véhicule disponibles</h1>
            </div>
            <div class="row row-cols-10 row-cols-md-3 g-4 ">
            <?php foreach($pdostat as $voiture){ ?>
            <div class="col">
            <div class="card" style="width: 25rem;">
                <img src="images/<?php echo $voiture['photo']?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $voiture['marque'] ?></h5>
                    <p class="card-text"><?php echo $voiture['kilometrage'] ?></p>
                    <p class="card-text"><?php echo $voiture['tarif']?> &euro;</p>
                    <a href="#" class="btn btn-primary">Voir la fiche</a>
                 </div>
            </div>
            </div>
                <?php }?>
            </div>
            </div>
        </section>
    </main>
    <?php include('footer.html')?>
</body>
</html>