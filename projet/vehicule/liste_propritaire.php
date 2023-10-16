<?php

        include("connexion.php");
        include("header.html");
        $pdostat = $pdo->query("SELECT * FROM proprietaire ORDER BY proprietaire_id DESC ");
        $pdostat->setFetchMode(PDO::FETCH_ASSOC);
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
                <th>Lien</th>
                <th>Nom</th>
                <th>Prénom</th>
        </tr>
        <?php foreach($pdostat as $ligne){?>
            <tr> 
                <td><a href="show_proprietaire.php?id=<?php echo $ligne['proprietaire_id']?>">Voir</a></td>
                <td><?php echo $ligne['nom'] ?></td>
                <td><?php echo $ligne['prenom'] ?></td>
            </tr>
            <?php }?>

        </table>
    </body>
</html>