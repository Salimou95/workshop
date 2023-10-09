    <?php
    include("connexion/connexion.php");
    include("vues/header.php");
    ?> 
    <html>

    <body>
        <form action="ajout_restaurant.php" method="post">
            <input type="text" name="nom">
            <input type="text" name="adresse">
            <input type="text" name="type">
            <input type="number" name="telephone">
            <input type="number" name="note">
            <input type="text" name="avis">
            <input type="submit" name="valid"> valider</input>
        </form>
        
    <?php
    $msg ="";
    if(isset($_POST['valid'])){

        if (empty($_POST['nom'])) {
            $msg .= "Entrez  le nom<br>";
        }

        if (empty($_POST['adresse'])) {
            $msg .= "Entrez  l'adresse <br>";
        }
        if (empty($_POST['type'])) {
            $msg .= "Entrez  le type <br>";
        }
        if (empty($_POST['telephone'])) {
            $msg .= "Entrez  le téléphone <br>";
        }
        if (empty($_POST['note'])) {
            $msg .= "Entrez  la note <br>";
        }
        if (empty($_POST['avis'])) {
            $msg .= "Entrez un avis <br>";
        }
        else{
            ;
            $resultat = $pdo -> prepare("INSERT INTO restaurant ( nom, adresse, telephone, type, note, avis) VALUES (:nom, :adresse, :telephone, :type, :note, :avis)");
            $resultat-> bindParam(":nom",$_POST['nom'] );
            $resultat-> bindParam(":adresse", $_POST['adresse']);
            $resultat-> bindParam(":telephone", $_POST['telephone']);
            $resultat-> bindParam(":type", $_POST['type']);
            $resultat-> bindParam(":note", $_POST['note']);
            $resultat-> bindParam(":avis", $_POST['avis']);
            
            $resultat-> execute();
            $donnees = $resultat->fetch(PDO :: FETCH_ASSOC);
        }

    }else{
            echo "ok";


    }
    echo $msg;
    ?>
    </body>

    </html>