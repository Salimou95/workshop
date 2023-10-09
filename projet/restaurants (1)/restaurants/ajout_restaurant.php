<?php
include "inc/init.php";

include "vues/header.php";

//Vérification à la connexion
    // var_dump($pdo); //--> connexion établie par --> object(PDO)#1 (0) { }

//Variable d'affichages
    $msg = "";

// à la soumission du formulaire
    // 1. contrôle de saisie du formulaire
        if ($_POST) {
            if (!isset($_POST['nom']) || strlen($_POST['nom']) < 2 || strlen($_POST['nom']) > 100) $msg .= '<div class="alert alert-danger">Le nom doit contenir entre 2 et 100 cacractères</div>';

            if (!isset($_POST['type']) || ($_POST['type'] != 'gastronomique' && $_POST['type'] != 'brasserie' && $_POST['type'] != 'pizzeria' && $_POST['type'] != 'autre'))  $msg .= '<div class="alert alert-danger">Le type doit être choisis</div>';

            if (!isset($_POST['adresse']) || !($_POST['adresse'])) $msg .= '<div class="alert alert-danger">L\'adresse doit être renseigné</div>';

            if (!isset($_POST['telephone']) || !preg_match('#^[0-9]{10}$#', $_POST['telephone'])) $msg .= '<div class="alert alert-danger">Le téléphone est un numéro à 10 chiffres</div>';

            if (!isset($_POST['note']) || !is_numeric($_POST['note']) || $_POST['note'] < 0 || $_POST['note'] > 5)
                $msg .= '<div class="alert alert-danger">La note est un numéro entre 0 et 5</div>'; // is_numeric() vérifie si la variable est un nombre ou bien une chaine numérique. 

            if (!isset($_POST['avis']) || !($_POST['avis']))
                $msg .= '<div class="alert alert-danger">Vous devez rédiger un avis.</div>';

            // 2. Si toutes les saisies sont correctes on insère en BDD
                if (empty($msg)) {
                    // 3. On assaini les saisies user
                        foreach ($_POST as $key => $value) {
                            $_POST[$key] = htmlentities($value, ENT_QUOTES);
                        }

                    // 4. On prépare notre requête
                        $req = $pdo->prepare("INSERT INTO restaurant (nom, type, adresse, telephone, note, avis) VALUES (:nom, :type, :adresse, :telephone, :note, :avis)");

                    // 5. On sécurise l'insertion en attribuant des marqueurs de la requête les variables contenant les valeurs à inserer
                        $req->bindParam(':nom', $_POST['nom']);
                        $req->bindParam(':type', $_POST['type']);
                        $req->bindParam(':adresse', $_POST['adresse']);
                        $req->bindParam(':telephone', $_POST['telephone']);
                        $req->bindParam(':note', $_POST['note']);
                        $req->bindParam(':avis', $_POST['avis']);

                        $res = $req->execute();

                    // 6. Message de réussite ou d'échec de l'enregistrement
                        if ($res) {
                            $msg .= '<div class="alert alert-success">Le restaurant à bien été enregistré.</div>';
                        } else {
                            $msg .= '<div class="alert alert-danger">Le restaurant n\'a bien été enregistré.</div>';
                        }
                } // fin if (empty($msg))
        } // Fin if ($_POST)


// -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

// Affichage

// Boucle  FOR sur le champs SELECT pour la note
    $select_note = "";

    for ($i = 0; $i < 6; $i++) {
        if ($_POST && isset($_POST['note']) && $_POST['note'] == $i) {
            $select_note .= '<option selected>' . $i . '</option>';
        }
        $select_note .= '<option>' . $i . '</option>';
    }
?>

        <!--************** DEBUT du contenu spécifique de chaque page **************-->
        <div class="row mt-4 mb-4 alert alert-info">
            <div class="col-8">
                <h1 class="colh1">Enregistrer le restaurant</h1>
            </div>
            <div class="col-4">
                <a href="liste_restaurants.php" class="btn btn-outline-info mt-2">Voir tous les restaurants répertoriés</a>
            </div>
        </div>

        <!-- FORMULAIRE -->
        <?php echo $msg; ?>
        <div class="row">
            <div class="col-12 p-0">
                <div class="card">
                    <form action="" method="post" >
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <input type="text" id="nom" name="nom" class="form-control" placeholder="Nom" value="<?php echo $_POST['nom'] ?? ''; ?>"><br>
                                </div>
                                <div class="col">
                                    <select name="type" id="type" class="form-control custom-select">
                                        <option value="">Type de restaurant</option>
                                        <option value="gastronomique" <?php if (isset($_POST['type']) && $_POST['type'] == 'gastronomique') echo 'selected'; ?>>Gastromonique</option>
                                        <option value="brasserie" <?php if (isset($_POST['type']) && $_POST['type'] == 'brasserie') echo 'selected'; ?>>Brasserie</option>
                                        <option value="pizzeria" <?php if (isset($_POST['type']) && $_POST['type'] == 'pizzeria') echo 'selected'; ?>>Pizzeria</option>
                                        <option value="autre" <?php if (isset($_POST['type']) && $_POST['type'] == 'autre') echo 'selected'; ?>>Autre</option>
                                    </select><br><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" id="adresse" name="adresse" class="form-control" placeholder="Adresse" value="<?php echo $_POST['adresse'] ?? ''; ?>"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" id="telephone" name="telephone" class="form-control" placeholder="Téléphone" value="<?php echo $_POST['telephone'] ?? ''; ?>"><br>
                                </div><!-- /.col -->
                                <div class="col">
                                    <select name="note" id="note" class="form-control custom-select">
                                        <option value="" selected>Noter</option>
                                        <?php echo $select_note; ?>

                                    </select><br><br>
                                </div><!-- /.col -->
                            </div><!-- /.row -->

                            <div class="row">
                                <div class="col">
                                    <label for="avis">Rédiger un avis</label><br>
                                    <textarea name="avis" id="avis" cols="30" rows="10" class="form-control" value="avis"><?php echo $_POST['avis'] ?? ''; ?></textarea>
                                </div>
                            </div> <!-- /.row -->

                        </div><!-- /.card-body -->
                </div><!-- /.card -->
                <input type="submit" value="Enregistrer" name="enregistrer" class="mt-4 btn btn-block btn-outline-info">
                </form>
            </div><!-- /.col-12 -->
        </div><!-- /.row -->

        <!--************** FIN du contenu spécifique de chaque page **************-->


        <?php include "vues/footer.php"; ?>