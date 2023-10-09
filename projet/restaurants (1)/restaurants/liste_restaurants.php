<!-- Révision pour l'évaluation -->
    <!-- 
        1- Afficher dans une table HTML la liste des restaurants avec les champs nom et téléphone, et un champ supplémentaire "autres infos" avec un lien qui permet d'afficher le détail de chaque restaurant.

	    2- Afficher sous la table HTML le détail d'un restaurant quand on clique sur le lien "autres infos".
    -->

<?php
//Appel de l'enète du site
include "vues/header.php";
// -=-=-=-=-=-=-=-=-=-
//  Appel du fichier init qui contient la connexion à la base de données
// -=-=-=-=-=-=-=-=-=-
include "inc/init.php";


// -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- INIT & FUNCTIONS -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-


// -=-=-=-=-=-=-=-=-=-=-
// Variables d'affichage
// -=-=-=-=-=-=-=-=-=-=-

$msg = '';
$msg_l = '';
$msg_r = '';
$note="";

// -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- TRAITEMENT -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

//pour la partie a droite 
// Affichage des détails du restaurant choisit :
     if (isset($_GET['id_resto'])) {
          // Assainissement des données - protection contre les injections CSS & JS
               $_GET['id_resto'] = htmlentities($_GET['id_resto'], ENT_QUOTES);

          // Requête
               $req = $pdo->prepare("SELECT * FROM restaurant WHERE id_restaurant = :id_restaurant");

          // Protection des données
               $req->bindParam(':id_restaurant', $_GET['id_resto']);

          // Execution de la requête
               $req->execute();

          // On transforme l'objet PDOStatement en tableau associatif
               $res = $req->fetch(PDO::FETCH_ASSOC);
               for($i=1;$i<=$res['note'];$i++){
                    
                    $note .='<i class="fa fa-star" aria-hidden="true"></i>';  
                    }

          // debug($res);

          // Si l'id demandé n'existe pas => message d'erreur
               if (!$res) {
                    $msg .= '<div class="alert alert-info">Le restaurant demandé n\'est pas répertorié.</div>';
                    $msg .= '<a href="ajout_restaurant.php" class="btn btn-block btn-outline-info mb-4">Ajouter un restaurant non répertorié.</a>';
               } else {
                    // Affichage des infos détaillées
                         $msg_r .= '<div class="card">';
                              $msg_r .= '<div class="card-header alert-info text-center">'. $res['nom'] .'</div>';
                              $msg_r .= '<div class="card-body>';
                                   $msg_r .= '<ul class="list-group list-group-flush">';
                                        $msg_r .= '<li class="list-group-item">Cuisine : '. $res['type'] .'</li>';
                                        $msg_r .= '<li class="list-group-item">Adresse : '. $res['adresse'] .'</li>';
                                        $msg_r .= '<li class="list-group-item">Téléphone : '. $res['telephone'] .'</li>';
                                        $msg_r .= '<li class="list-group-item">Note : '. $note .'</li>';
                                        $msg_r .= '<li class="list-group-item">Avis : '. $res['avis'] .'</li>';
                                   $msg_r .= '</ul>';
                              $msg_r .= '</div>';
                         $msg_r .= '</div>';
                         //$msg_r .= '<a href="ajout_restaurant.php" class="btn btn-block btn-outline-danger mt-4">Ajouter un nouveau restaurant.</a>';
               }
     } // END if (isset($_GET['id_resto']))

//lecture la liste des infos avec une manière différentes
//ici pour le moment ca marche pas parce que le resultat est fecther deja en haut, donc je dois supprimer celle de haut, on peut utiliser avec echo tout ce qui est html
?>
<div class="col-md-6">

</div>
<?php

// -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=- AFFICHAGE -=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-

?>

                <div class="alert bg-info mt-4 mb-4">
                    <h1 class="text-white">Liste des restaurants</h1>
                </div>

                <?php echo $msg; ?>
                
                <div class="row">
                     <div class="col-8">
                          <?php //echo $msg_l; ?>
                          <!--amal-->
                          <table  class="table table-striped table-hover table-light mb-0">
                              <tr>
                                   <th>Nom</th>
                                   <th>Téléphone</th>
                                   <th>Autres infos</th>

                              </tr>
                              <?php
                              $table_restaurants = $pdo->query("SELECT id_restaurant, nom, telephone FROM restaurant");
                               while($restaurants = $table_restaurants->fetch(PDO::FETCH_ASSOC)) { 
                                   ?>
                                   <tr>
                                   <td><?=$restaurants['nom'];?></td> 
                                   <td><?=$restaurants['telephone'];?></td> 
                                   <td>  <a class="btn btn-info" href="?id_resto=<?= $restaurants["id_restaurant"] ?>">Plus de détails</a>
                                   </td> 
                              
                              </tr>
                              <?php
                              }
                         ?>
                     </table>
                    </div>
                    <div class="col-4">
                    <!--ici pour afficher le detail de chaque restaurant -->
                         <?php echo $msg_r; ?>

                     </div>
               </div>
               <div class="row">
               <a href="ajout_restaurant.php" class="btn btn-block btn-outline-danger mt-4">Ajouter un nouveau restaurant.</a>
               </div>
                <!--************** FIN du contenu spécifique de chaque page **************-->
 <?php include "vues/footer.php"; ?>
    



