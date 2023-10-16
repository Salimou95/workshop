    <?php include("connexion_bdd.php") ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <title>Ajouter une annonce</title>
    </head>
    <body>
    <?php include("header.html")?>
        <section>
            <?php
            
                $msg ="";
        if($_POST){

            if (empty($_POST['titre'])) {
                $msg .= "<div class='bg-danger-subtle p-2 col-10 m-auto rounded'><p class='text-danger'>Entrez un titre </div></p><br>";
            }

            if (empty($_POST['description'])) {
                $msg .= "<div class='bg-danger-subtle p-2 col-10 m-auto rounded'><p class='text-danger'>Entrez une description </div></p><br>";
            }
            if (empty($_POST['codepostal'])) {
                $msg .= "<div class='bg-danger-subtle p-2 col-10 m-auto rounded'><p class='text-danger'>Entrez un code postal </div></p><br>";
            }
            if (empty($_POST['ville'])) {
                $msg .= "<div class='bg-danger-subtle p-2 col-10 m-auto rounded'><p class='text-danger'>Entrez une ville </div></p><br>";
            }
            if (empty($_POST['type'])) {
                $msg .= "<div class='bg-danger-subtle p-2 col-10 m-auto rounded'><p class='text-danger'>Entrez un type </div></p><br>";
            }
            if (empty($_POST['prix'])) {
                $msg .= "<div class='bg-danger-subtle p-2 col-10 m-auto rounded'><p class='text-danger'>Entrez un prix </div></p><br>";
            }

            else{
                $ajoutannonce = $pdo -> prepare("INSERT INTO advert(title, description, postal_code, city, type, price) VALUES (:title, :description, :postal_code, :city, :type, :price)");
                $ajoutannonce-> bindParam(":title",$_POST['titre'] );
                $ajoutannonce-> bindParam(":description", $_POST['description']);
                $ajoutannonce-> bindParam(":postal_code", $_POST['codepostal']);
                $ajoutannonce-> bindParam(":city", $_POST['ville']);
                $ajoutannonce-> bindParam(":type", $_POST['type']);
                $ajoutannonce-> bindParam(":price", $_POST['prix']);
                $msg = "<div class='bg-success-subtle p-2 col-10 m-auto rounded'><p class='text-success'>Nouvelle annonce ajoutée avec succés </div></p><br>";
                try{
                $ajoutannonce-> execute();

                }catch(Exception $e){
                    $errors = "Error". $e->getMessage();
                }
            }echo $msg;

        }
            
            ?>
            <form action="ajouter_une_annonce.php" method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Titre</span>
                    <input type="text" class="form-control" placeholder="Titre" aria-label="Username" aria-describedby="basic-addon1" name="titre">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Description</span>
                    <textarea name="description" id="" cols="80" rows="0" class="class="form-control""></textarea>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Code Postal</span>
                    <input type="number" class="form-control" placeholder="Code Postal" aria-label="Username" aria-describedby="basic-addon1" name="codepostal">
                </div>
                
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Type</span>

                    <select name="type" id="" class="form-control" >
                        <option value="Location">Location</option>
                        <option value="Vente">Vente</option>
                    </select>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Ville</span>
                    <input type="text" class="form-control" placeholder="Ville" aria-label="Username" aria-describedby="basic-addon1" name="ville">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Prix</span>
                    <input type="number" class="form-control" placeholder="Prix" aria-label="Username" aria-describedby="basic-addon1" name="prix">
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </section>
    </body>
    </html>