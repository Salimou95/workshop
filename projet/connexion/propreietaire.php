<?php
include("connex.php");
include("header.php");
?>
<body>
    
    <?php

try{
    $pdostat = $pdo->query("SELECT * FROM proprietaire");
    $pdostat->setFetchMode(PDO::FETCH_ASSOC) ;
    $result = $pdo->query("SHOW COLUMNS FROM  proprietaire");
    $col = $pdo->query("DESCRIBE proprietaire")->fetchAll(PDO::FETCH_COLUMN);

    if(isset($_GET["table"])){
        echo "non renseignée !";
        die();
    }
    else{
        $table = $_GET["table"];
        if(!in_array($table, array("proprietaire","vehicule"))){
            echo "table non existante";
        }
    }

}
catch(Exception $e){
    echo "<p>ERREUR : ".$e->getMessage();
}?>
        <table class="table table table-striped">
            <tr>
                <td colspan="2">Action</td>
                        <?php
        foreach ($col as $colonne) { 
            ?>
                <td><?php echo $colonne ?></td>
                
            <?php
        }?>
                </tr>
    <tr>


        <?php
        foreach ($pdostat as $ligne) { 
            ?>
    <td><a href="">Voir</a></td>
    <td><a href="">Edit</a></td>
                
            <?php foreach ($col as $colonne) { 
            ?>
    <td><?php echo $ligne[$colonne]?></td>         
            <?php
        }?>



</tr>
<?php
        }
?>
</table>
</body>
</html>