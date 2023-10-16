<?php
include("connexion_bdd.php");
$pdostat = $pdo->query("SELECT * FROM advert ORDER BY id DESC LIMIT 15");
$pdostat->setFetchMode(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Accueil</title>
</head>
<body>
<?php include("header.html")?>
    <section>
        <div class="row">
        <?php foreach($pdostat as $annonce){?>
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo strtoupper($annonce['title'])?></h5>
                        <p class="card-text"><?php echo $annonce['postal_code']?></p>
                        <p class="card-text"><?php echo $annonce['city']?></p>
                    </div>
                </div>
             </div>
             <?php }?>
        </div>
    </section>
</body>
</html>