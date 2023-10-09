<?php
$pdo = new PDO("mysql:host=localhost;dbname=restaurants","root","",
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8'));
    $pdostat = $pdo->query("SELECT * FROM restaurant");
    $pdostat->setFetchMode(PDO::FETCH_ASSOC) ;
    

?>