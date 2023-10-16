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
    <?php include("header.php")?>
    <main class="mt-5">
    <?php
    if($_POST){
        $mdp = $_POST['mdp'];
        $test =$_POST['email'];
        $check_email_query = $pdo->prepare("SELECT * FROM membre WHERE email = :test");
        $check_email_query->bindParam(':test', $test, PDO::PARAM_STR);
        $check_email_query->execute();

            if(empty($_POST['mdp'])){
                $msg.=  "<div class='container bg-danger-subtle  mb-3 p-3 text-danger'><p>remplisez le champs mot de passe</p></div>";
            }

            if(empty($_POST['pseudo'])){
                $msg.=  "<div class='container bg-danger-subtle  mb-3 p-3 text-danger'><p>remplisez le champs pseudo</p></div>";
            }

           if(empty($_POST['nom'])){
                $msg.=  "<div class='container bg-danger-subtle  mb-3 p-3 text-danger'><p>remplisez le champs nom</p></div>";
           }
           if(empty($_POST['prenom'])){
                $msg.=  "<div class='container bg-danger-subtle  mb-3 p-3 text-danger'><p>remplisez le champs prenom</p></div>";
           }
           if(empty($_POST['email'])){
                $msg.=  "<div class='container bg-danger-subtle  mb-3 p-3 text-danger'><p>remplisez le champs email</p></div>";

           }
           if(empty($_POST['telephone'])){
                $msg.=  "<div class='container bg-danger-subtle  mb-3 p-3 text-danger'><p>remplisez le champs telephone</p></div>";
            }
            if ($check_email_query->rowCount() > 0) {
             $msg .= "<div class='container bg-danger-subtle mb-3 p-3 text-danger rounded'><p>Cet email existe déja</p></div>";
            }
            if (!preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $mdp)){
            $msg .= "<div class='container bg-danger-subtle mb-3 p-3 text-danger rounded'><p>Veuillez verifier que votre mot de passe contienne un caractere en  majuscule,un en minuscule Chiffre, un chiffre et un caractére speciale</p></div>";
            }
            else{
                $mdphash = password_hash($mdp, PASSWORD_BCRYPT);
                $req = $pdo->prepare("INSERT INTO membre(pseudo, mdp, nom, prenom, email, telephone) VALUES(:pseudo, :mdp, :nom, :prenom, :email, :telephone) ");
                $req -> bindParam(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
                $req -> bindParam(':mdp', $mdphash, PDO::PARAM_STR);
                $req -> bindParam(':nom', $_POST['nom'], PDO::PARAM_STR);
                $req -> bindParam(':prenom', $_POST['prenom'], PDO::PARAM_STR);
                $req -> bindParam(':email', $_POST['email'], PDO::PARAM_STR);
                $req -> bindParam(':telephone', $_POST['telephone'], PDO::PARAM_STR);
                try{
                    $req -> execute();
                }catch(Exception $e){
                    echo "erreur dans le form";
                }
            }
        }
        echo $msg;
    ?>
        <section class="col-10 m-auto">
            <div class="p-3 mb-2 bg-primary text-white mb-4 rounded">
                <h1>Formulaire d'inscription</h1>
            </div>
            <div class="col-11 m-auto">
                <form action="inscription.php" method="post">
                    <input type="text" placeholder="Pseudo" name="pseudo" class="form-control">
                    <input type="password" placeholder="Mot de passe" name="mdp" class="form-control">
                    <input type="text" placeholder="Nom" name="nom" class="form-control">
                    <input type="text" placeholder="Prénom" name="prenom" class="form-control">
                    <input type="email" placeholder="Email" name="email" class="form-control">
                    <input type="number" placeholder="Téléphone" name="telephone" class="form-control">
                    <button type="submit" class="btn btn-primary">S'incrire</button>
                </form>
            </div>
        </section>
    </main>
    <?php include('footer.html')?>
</body>
</html>