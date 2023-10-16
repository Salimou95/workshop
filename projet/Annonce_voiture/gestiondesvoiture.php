<?php
include("connexion.php");
$pdostat = $pdo->query("SELECT * FROM voiture");
$pdostat->setFetchMode(PDO::FETCH_ASSOC) ;
// include('formconnex.php');
// echo $membre;
    if(isset($_GET["supprimer"])){
        $supprimer = $pdo->prepare("DELETE FROM voiture WHERE id = ?");
        $supprimer->bindParam(1, $_GET["supprimer"]);
        $supprimer->execute();
        header("location: gestiondesvoiture.php");
    }
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
                <h1>La liste des voitures</h1>
            </div>
            <div>
                <table class="table table-striped table-hover">
                    <tr class="bg-black">
                        <th>Marque</th>
                        <th>Kilometrage</th>
                        <th>Tarif</th>
                        <th>Photo</th>
                        <th colspan="2">Action</th>
                    </tr>
            <?php foreach($pdostat as $voiture){ ?>
                <tr>
                    <td><?php echo $voiture['marque']?></td>
                    <td><?php echo $voiture['kilometrage']?></td>
                    <td><?php echo $voiture['tarif']?></td>
                    <td><img src="images/<?php echo $voiture['photo']?>" alt="" style="width: 200px;height: 200px;"></td>
                    <td><a href="" type="button" class="btn btn-primary">Modifier</a></td>
                    <td><a href="?supprimer=<?php echo $voiture['id']?>" type="button" class="btn btn-danger">Supprimer</a></td>  
                </tr>
                <?php }?>
            </table>
            </div>
            </div>
        </section>
    </main>
    <?php include('footer.html')?>
</body>
</html>