<?php
 // Connexion à la BDD
 $pdo = new PDO('mysql:host=localhost;dbname=societe', 'root', '', array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
));
$msg="";//on creé une varibale pour y mettre les messages d'erreur s'il y on a
//*************************script pour enregistrer les modifications sur employes */
if($_POST){
    
//on test si on a $_POST cela signifie qu'on un formulaire qu' est passé, donc on fait la requete UPDATE pour modifier les infos d'un employé
    $req=$pdo->prepare("Update employes set prenom=:prenom, nom=:nom,sexe=:sexe,service=:service,date_embauche=:date_embauche,salaire=:salaire where id_employes=:id_employes");
    $req->bindParam(':nom', $_POST['nom']);
    $req->bindParam(':prenom', $_POST['prenom']);
    $req->bindParam(':sexe', $_POST['sexe']);
    $req->bindParam(':service', $_POST['service']);
    $req->bindParam(':date_embauche', $_POST['date_embauche']);
    $req->bindParam(':salaire', $_POST['salaire']);
    $req->bindParam(':id_employes', $_GET['edit']);
    $req->execute();
    $msg.='<div class="alert alert-success">Votre modification est bien enregitré</div>';
}
if (isset($_GET['edit'])) {
    // Assainissement des données - protection contre les injections CSS & JS
         $_GET['edit'] = htmlentities($_GET['edit'], ENT_QUOTES);

    // Requête
         $req = $pdo->prepare("SELECT * FROM employes WHERE id_employes = :id_employes");

    // Protection des données
         $req->bindParam(':id_employes', $_GET['edit']);

    // Execution de la requête
         $req->execute();

    // On transforme l'objet PDOStatement en tableau associatif
         $res = $req->fetch(PDO::FETCH_ASSOC);
       

    // debug($res);

    // Si l'id demandé n'existe pas => message d'erreur
         if (!$res) {
             //les messages d'erreurs
              $msg .= '<div class="alert alert-info">L\'employé demandé n\'existe pas.</div>';
              $msg .= '<a href="formulaire.php" class="btn btn-block btn-outline-info mb-4">Ajouter un employé non répertorié.</a>';
              //ici si id de l'employé demandé n'existe pas  on va vider tous les champs, parce qu'on demande un employé qui n'existe pas
              $prenom="";
              $nom="";
              $sexe="";
              $service="";
              $date_embauche="";
              $salaire="";
         } else {
              // si non si on a un resultat qui n'est pas vide on va Afficher les infos détaillées
                   $prenom=$res['prenom'];
                   $nom=$res['nom'];
                   $sexe=$res['sexe'];
                   $service=$res['service'];
                   $date_embauche=$res['date_embauche'];
                   $salaire=$res['salaire']." €";
             }
} // END if (isset($_GET['edit']))

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Révisions SQL/PHP</title>
</head>
<body>
    <div class="container">
    <div class="row mt-4 mb-4 alert alert-warning">
            <div class="col-8">
                <h1 class="colh1">Modifier un employé</h1>
            </div>
            <div class="col-4">
                <a href="list_employe.php" class="btn btn-warning mt-2">Voir la liste des employés</a>
            </div>
        </div>
   
        <?php echo $msg; ?>
        <form method="post" action="" class="card p-4" enctype="multipart/form-data">
        <div class="row">
            <div class="form-group col-md-6">
                <label>Prenom :</label>
                <input type="text" name="prenom"  value="<?=$prenom; ?>" class="form-control">
            </div>
            <div class="form-group col-md-6">
                <label>Nom :</label>
                <input type="text" name="nom" value="<?=$nom;?>" class="form-control">
            </div>
            </div>
            <div class="row">
            <div class="form-group col-md-6">
                <label>Sexe :</label>
                <select name="sexe" class="form-control custom-select">
                    <option <?php if($sexe=='m') echo 'selected'; ?> value="m">Masculin</option>
                  
                    <option value="f" <?php if($sexe=='f') echo 'selected'; ?>>Feminin</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label>Service :</label>
                <select name="service" class="form-control custom-select">
                    <option <?php if($service=='direction') echo 'selected'; ?> value="direction">Direction</option><!-- on teste sur la valeur recupérer pour l'afficher-->
                    <option <?php if($service=='commercial') echo 'selected'; ?> value="commercial">Commercial</option>
                    <option <?php if($service=='production') echo 'selected'; ?> value="production">Production</option>
                    <option <?php if($service=='secriteriat') echo 'selected'; ?> value="secretariat">Secretariat</option>
                    <option <?php if($service=='comptabilite') echo 'selected'; ?> value="comptabilite">Comptabilite</option>
                    <option <?php if($service=='informatique') echo 'selected'; ?> value="informatique">Informatique</option>
                    <option <?php if($service=='communication') echo 'selected'; ?> value="communication">Communication</option>
                    <option <?php if($service=='juridique') echo 'selected'; ?> value="juridique">Juridique</option>
                    <option <?php if($service=='assistant') echo 'selected'; ?> value="assistant">Assistant</option>
                </select>
            </div>
            </div>
            <div class="form-group">
                <label>Date d'embauche :</label>
                <input type="text" name="date_embauche" class="form-control" value="<?php echo $date_embauche; ?>">
            </div>
            <div class="form-group">
                <label>Salaire :</label>
                <input type="text" name="salaire" class="form-control" value="<?php echo $salaire; ?>">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-warning btn-block" value="Enregistrer">
            </div>
        </form>
    </div>
</body>
</html>