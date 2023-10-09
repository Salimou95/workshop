<?php
include("connex.php");
include("header.php");
?>

<?php

// $db = new PDO(DSN[, user[, pass[, options]]]);
try{
    $pdostat = $pdo->query("SELECT * FROM vehicules");
    $pdostat->setFetchMode(PDO::FETCH_ASSOC) ;
}catch(Exception $e){
    echo "<p>ERREUR : ".$e->getMessage();
}?>
<html>

<body>
    <table class="table table-success table-striped-columns">
        <tr>
            <th>Action</th>
            <th>Immatriculation</th>
            <th>Marque</th>
            <th>Modele</th>
            <th>Couleur</th>
            <th>Image</th>
        </tr>
    <?php
    
    foreach ($pdostat as $ligne) { 
    echo " <tr>
            <td><a href=''><i class='fa-solid fa-eye'></i></a><a href=''><i class='fa-solid fa-pen'></i></a><a href=''>Supprimer</a></td>";
    ?>
    <td><?php echo $ligne['immatriculation'] ?></td>
    <td><?php echo $ligne['marque'] ?></td>
    <td><?php echo $ligne ['modele']?></td>
    <td><?php echo $ligne['couleur']?></td>
    <td><img src="<?php echo $ligne['image'].'.png'?>" alt=""></td>
</tr>

<?php }
?>
</table>
</body>
</html>
