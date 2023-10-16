<?php

        include("connexion.php");
        include("header.html");
        if (isset($_GET['id'])) {
               $_GET['id'] = htmlentities($_GET['id'], ENT_QUOTES);
               $req = $pdo->prepare("SELECT * FROM proprietaire WHERE proprietaire_id = :id_proprietaire");
               $req->bindParam(':id_proprietaire', $_GET['id']);
               $req->execute();
            $res = $req->fetchAll();

               if (!$res) {
                echo "La perssonne n'existe pas";

               } 
            }
?>

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    </head>
    <body>
        <table class="table table-striped">
            <tr>
                <th>champs</th>
                <th>Valeur</th>
        </tr>
        <?php foreach($res as $ligne){
            
            echo "<tr><td>Proprietaire id</td><td>".$ligne['proprietaire_id']."</td></tr>";
            echo "<tr><td>Nom</td><td>".$ligne['nom']."</td></tr>";
            echo "<tr><td>Prenom</td><td>".$ligne['prenom']."</td></tr>";
            echo "<tr><td>Adresse</td><td>".$ligne['adresse']."</td></tr>";

            if(empty($ligne['commentaire'])){
                echo "ok";
 ?>
        
                <form action="actionmodifie.php" method="post">
                <textarea name="comm" cols="30" rows="10"></textarea>
                <button type="">Envoyer</button>
                
    </form>
<?php
            }else{
        echo "<tr><td>Commentaire</td><td>".$ligne['commentaire']."</td></tr>";
        }}?>



          

        </table>
    </body>
</html>