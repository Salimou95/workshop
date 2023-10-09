<?php
    include("connexion.php");

    try {
        if(!isset($_GET["table"])){
            echo "Table non renseignée !";
            die();
        }
        else{
            $table = $_GET["table"];
            if( !in_array($table, array("proprietaire", "vehicules","")) ){
                echo "Table non existante";
                die();
            }
        }
        $pdostat = $pdo->query("SELECT * FROM ".$table);
        $pdostat->setFetchMode(PDO::FETCH_ASSOC);
        $total_column = $pdostat->columnCount();
    } catch (Exception $e) {
        echo "<p>ERREUR REQUETE : ".$e->getMessage()."</p>" ;
    }

    ?>

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
        <style>
            .imaages{
                width: 100px;
            }
            table tr td{
                vertical-align: middle;
            }
            fieldset{
                margin-bottom: 50px;
            }
        </style>
    </head>
    <body>
        <?php
            include("header.html");
        ?>

        <div class="container">
            <div class="row" >
                <div class="col">

                    <p>
                        <a href="new.php?table=<?php echo $table ?>">Ajouter un <?php echo $table ?></a>
                    </p>
                    <table  class="table table-striped">
                        <tr>
                            <td colspan="2">Actions</td>
                            <?php
                                for ($counter = 0; $counter < $total_column; $counter ++) {
                                    $meta = $pdostat->getColumnMeta($counter);
                                    echo "<th>". $meta['name'] ."</th>";
                                }
                                $champ_id = $meta = $pdostat->getColumnMeta(0)["name"];
                            ?>
                        </tr>
                        <?php
                            foreach ($pdostat as $ligne) {
                                ?>
                                <tr>
                                    <td>
                                        <a href="show.php?table=<?php echo $table?>&champ_id=<?php echo $champ_id ?>&id=<?php echo $ligne[$champ_id]?>"  >Voir</a>
                                    </td>
                                    <td>
                                        <a href="edit.php?table=<?php echo $table?>&id=<?php echo $ligne[$champ_id]  ?>"  >Edit</a>
                                    </td>
                                    <?php
                                        for ($counter = 0; $counter < $total_column; $counter ++) {
                                            $meta = $pdostat->getColumnMeta($counter);
                                            echo "<td>". $ligne[$meta['name']] ."</td>";
                                        }

                                    ?>
                                </tr>
                                <?php
                            }
                        ?>
                    </table>                

                </div>
            </div>
        </div>

        
    </body>
</html>