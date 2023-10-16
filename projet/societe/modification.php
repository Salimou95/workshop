<?php
include("connexion.php");
 $prenom = "";
                    $nom = "";
                    $dateembauche="";
                    $salaire ="";
                    $sexe= "";
                    $service = "";
if($_POST){

    $sql = "UPDATE employes SET prenom = :prenom, nom = :nom, sexe = :sexe, service = :service, date_embauche = :date_embauche, salaire = :salaire WHERE id_employes = :id";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->bindParam(':prenom', $_POST['prenom']);
    $stmt->bindParam(':nom', $_POST['nom']);
    $stmt->bindParam(':sexe', $_POST['sexe']);
    $stmt->bindParam(':service', $_POST['service']);
    $stmt->bindParam(':date_embauche', $_POST['dateembauche']);
    $stmt->bindParam(':salaire', $_POST['salaire']);
    $stmt->execute();
}
if (isset($_GET['id'])) {
               $_GET['id'] = htmlentities($_GET['id'], ENT_QUOTES);
               $req = $pdo->prepare("SELECT * FROM employes WHERE id_employes = :id");
               $req->bindParam(':id', $_GET['id']);
               $req->execute();
               $res = $req->fetch(PDO::FETCH_ASSOC);

               if (!$res) {
                    echo "La perssonne n'existe pas";
                   

               } else {
                    $prenom = $res['prenom'];
                    $nom = $res['nom'];
                    $dateembauche =$res['date_embauche'];
                    $salaire = $res['salaire'];
                    $sexe= $res['sexe'];
                    $service = $res['service'];
               }
            }
            

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <section class="col-8 container">
        <div class="bg-warning text-dark p-2 bg-opacity-50 d-flex justify-content-between">
            <h1 class="">Modifier un employés</h1>
            <td class=""><a href="ajout.php" type="button" class="btn btn-warning ">Ajouter un nouvel employé</a></td>
    </div>
        <div>
            <form action="modification.php" method="post">

           

            <div>
                <label for="">¨Prenom</label>
                <input type="text" name="prenom" value="<?= $prenom;  ?>">
            </div>
            <div>
                <label for="">Nom</label>
                <input type="text" name="nom" value="<?php echo $nom;?>">
            </div>
            <div>
                <label for="">sexe</label>
                <input type="text" name="sexe" value="<?php echo $sexe;?>">
            </div>
            <div>
                <label for="">Service</label>
                <input type="text" name="service" value="<?php echo $service;?>">
            </div>
            <div>
                <label for="">Date embauche</label>
                <input type="date" name="dateembauche" value="<?php echo $dateembauche;?>">
            </div>
            <div>
                <label for="">Salaire</label>
                <input type="text" name="salaire" value="<?php echo $salaire; ?>">
            </div>
        
            <button type="submit">Valider</button>
            </form>
        </div>
    </section>
</body>
</html>