<?php

// Pdo

//  Pdo pour PHP Data object, définit une interface pour accéder à une base de données depuis php

echo "<h3> -connexion </h3>";

$pdo = new PDO("mysql:host=localhost;dbname=societe","root","",
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8'));

echo "<h3> 2- la méthode exec()</h3>";

$resultat = $pdo->exec("INSERT INTO employes (prenom,  nom, sexe, service, date_embauche, salaire) VALUE ('test','test','m','test','2020-02-05',500)");

echo "nombre de ligne affectées par INSERT : $resultat <br>";
echo "dernier id générer par la bd". $pdo->lastInsertId();

$resultat = $pdo->exec("DELETE FROM employes WHERE prenom = 'test'");
echo "<br> nombre de ligne affecter par DELETE : $resultat <br>";

echo" <h3>3- la méthode query</h3>";

$resultat = $pdo->query("SELECT * FROM employes WHERE prenom = 'daniel' ");

echo "<pre>";
print_r($pdo);
print_r($resultat);
echo "</pre>";

// il faut donc transformer $resultat avec la methode fetch()
$employe = $resultat ->fetch(PDO:: FETCH_ASSOC);

echo "<pre>";
print_r($employe);
echo "</pre>";

echo " je suis $employe[prenom] $employe[nom] du service $employe[service]. <br>";

// la methode preparer

$nom = "sennard";
$resultat = $pdo -> prepare("SELECT * FROM employes WHERE nom = :aa");

$resultat-> bindParam(":aa", $nom);

$resultat-> execute();

$donnees = $resultat->fetch(PDO :: FETCH_ASSOC);

echo "<pre>";
    print_r($donnees);
echo "</pre>";


?>