<?php
include("connexion.php");
if (isset($_GET['id'])) {
               $_GET['id'] = htmlentities($_GET['id'], ENT_QUOTES);
               $req = $pdo->prepare("SELECT * FROM proprietaire WHERE proprietaire_id = :id_proprietaire");
               $req->bindParam(':id_proprietaire', $_GET['id']);
               $req->execute();
               $res = $req->fetch(PDO::FETCH_ASSOC);
                $result = $pdo->query("SHOW COLUMNS FROM  proprietaire");
                $col = $pdo->query("DESCRIBE proprietaire")->fetchAll(PDO::FETCH_COLUMN);

               if (!$res) {
                echo "La perssonne n'existe pas";

               } else {
               }
            }
?>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    </head>
<?php
include("header.html");
?>
<table class="table table table-striped">
    <tr>
<?php foreach ($col as $colonne) { ?>            
        <td><?php echo $colonne ?></td>
<?php } ?> 
        <tr>
<?php 
 foreach ($res as $name){
    ?>
        <td><?php echo $name?></td>
    <?php 
    }?>
    </tr>
</table>
