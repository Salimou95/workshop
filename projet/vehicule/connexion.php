<?php
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=ma_bdd", "root", "") ;
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION) ;
    } catch (Exception $e) {
        echo "<p>ERREUR : ".$e->getMessage() ;
    }
?>



