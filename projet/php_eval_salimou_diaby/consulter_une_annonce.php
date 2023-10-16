<?php 
include("connexion_bdd.php");
if (isset($_GET['id'])) {
    
    $_GET['id'] = htmlentities($_GET['id'], ENT_QUOTES);
    $req = $pdo->prepare("SELECT * FROM advert WHERE id = :id");
    $req->bindParam(':id', $_GET['id']);
    $req->execute();
    $res = $req->fetch(PDO::FETCH_ASSOC);
    $id =$res['id'];

         if (!$res) {
             echo "La perssonne n'existe pas";
         }


}

if($_POST){
    $pdostat = $pdo->prepare("UPDATE advert SET reservation_message=:reserve WHERE id=:id");
    $pdostat->bindParam(':id', $_GET['id'], PDO ::PARAM_INT);
    $pdostat->bindParam(':reserve', $_POST['reserve']);
    $pdostat->execute();
    $res = $pdostat->fetch(PDO ::FETCH_ASSOC);
}



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

            <div class="col-sm-6 mb-3 mb-sm-0 m-auto" >
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo strtoupper($res['title']) ?></h5>
                        <p class="card-text"><?php echo $res['description'] ?></p>
                        <p class="card-text"><?php echo $res['postal_code'] ?></p>
                        <p class="card-text"><?php echo $res['city'] ?></p>
                        <p class="card-text"><?php echo $res['type'] ?></p>
                        <p class="card-text"><?php echo $res['price'] ?></p>
                        <?php if(!empty($res['reservation_message'])){ ?>
                            <label>Déja reservé</label>
                        <?php    }else{ ?>
                            
                            <form action="consulter_une_annonce.php<?php $_GET['id']?>" method="post">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Message reservation</span>
                                    <textarea name="reserve" cols="50" rows="5" placeholder="Message de réservation">
                                    </textarea>
                                    <button type="submit" class="btn btn-primary" name="clique">Réservé</button>
                                </div>
                            </form>
                        <?php } ?>
                    </div>
                </div>
             </div>
        </div>
    </section>
    

</html>


