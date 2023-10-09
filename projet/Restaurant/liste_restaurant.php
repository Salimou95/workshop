<?php
include("connexion/connexion.php");
include("vues/header.php");
$img2= "";
?>


    <div class="bg-primary text-white col-8 " style="height: 60px;"><h1>Liste des restaurants</h1></div>
    <main class="container row">
        <section class="col-8">
            <div >
            <table class="table table-striped">
                <tr>
                    <td>Nom</td>
                    <td>Téléphone</td>
                    <td>Autres infos</td>
                </tr>

<?php
    foreach ($pdostat as $restau) { 
?>
    <tr>
        <td><?php echo $restau['nom'] ?></td>
        <td><?php echo $restau['telephone'] ?></td>
        <td><a href="?id=<?php echo $restau['id_restaurant'] ?>&telephone= <?php echo $restau['telephone']?>&cuisine=<?php echo $restau['type']?> &adresse=<?php echo $restau['adresse'] ?>&note=<?php echo $restau['note']?>&avis=<?php echo $restau['avis']?>"  type="button" class="btn btn-primary">Plus de détails</a></td>
    </tr>
<?php
    }
?>
            </table>
            </div>
        </section>
<?php
$msg='';
echo $msg;
if(($_GET)){

    $telephone = $_GET['telephone'];
    $cuisine = $_GET['cuisine'];
    $adresse = $_GET['adresse'];
    $note = $_GET['note'];
    $avis = $_GET['avis'];
?>
<section class="col-4">
    <div class="card" style="width: 18rem;">  
    <ul class="list-group list-group-flush">    
        <li class="list-group-item bg-info-subtle">ODWICH</li>    
        <li class="list-group-item"><?php echo $cuisine?> </li>    
        <li class="list-group-item"><?php echo $adresse?></li> 
        <li class="list-group-item"><?php echo $telephone?></li> 
        <li class="list-group-item">
            <?php for($i=1; $i<=$note;$i++){
            $img2 .=' <i class="fa-solid fa-star"></i>';
}echo $img2
?>
        </li> 
        <li class="list-group-item"><?php echo $avis?></li> 
         
    </ul>
</div>
</section>

<?php
};
?>

<section class="page">
    <a href="ajout_restaurant.php" type="button" class="btn btn-outline-danger">Ajouter un nouveau restaurant</a>
</section>
    </main>
</body>
</html>