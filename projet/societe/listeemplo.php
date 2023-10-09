<?php
include("connexion.php")
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
        <div class="bg-warning text-dark p-2 bg-opacity-50 ">
            <h1 class="d-inline">Liste des employés</h1>
            <td class="d-inline"><a href="ajout.php" type="button" class="btn btn-warning">Ajouter un nouvel employé</a></td>
    </div>
        <div>
            <table class="table table-striped">
                <tr>
                    <td>Id</td>
                    <td>Prénom</td>
                    <td>Nom</td>
                    <td>Sexe</td>
                    <td>Service</td>
                    <td>Date embauche</td>
                    <td>Salaire</td>
                    <td>Modification</td>
                    <td>Suppression</td>
                </tr>
<?php
    foreach ($pdostat as $emp) {
?>
                <tr>
                    <td><?php echo $emp['id_employes']?></td>
                    <td><?php echo $emp['prenom']?></td>
                    <td><?php echo $emp['nom']?></td>
                    <td><?php echo $emp['sexe']?></td>
                    <td><?php echo $emp['service']?></td>
                    <td><?php echo $emp['prenom']?></td>
                    <td><?php echo $emp['prenom']?></td>
                    <td><a href="modification.php" type="button" class="btn btn-warning">Modifier</a></td>
                    <td><a href="" type="button" class="btn btn-danger">Supprimer</a></td>
                </tr>
<?php
}
?>
    </table>
</div>
    </section>
</body>
</html>