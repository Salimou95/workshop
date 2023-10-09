<html>
    <body>
        <h1>Exercice 1:  Hello world</h1>
<?php
    echo "Hello world";
    
?>
    <h1> Exercice 2 :Calcul</h1>

    <?php
    $nombre1 = 1.5;
    $nombre2 = 12;
    $chaine1 = "10";
    $chaine2 = "Salut";
    $total = $nombre1 + $nombre2 + $chaine1 . " $chaine2";

    echo $total;
    var_dump($total);

    ?>

    <h1>Exercices 3 :Moyenne</h1>
    <?php
    $note_maths = 15;
    $note_francais = 12;
    $note_histoire_geo = 9;
    $moyenne = ($note_francais + $note_histoire_geo +$note_maths)/3;

    echo "Moyenne : ".$moyenne;

    ?>

    <h1>Exercices 4 :Tva</h1>
    <?php
    $prix_ht = 50;
    $tva = 20;
    $pric_ttc = ($prix_ht / 100 * $tva )  + $prix_ht;

    echo "Prix TCC: ".$pric_ttc;

    ?>


    <h1>Exercice 5 : Les opérateur</h1>
    <?php
    $a = 12; $b = "12"; $c = 13.0;
    var_dump($a == $b);
    var_dump($a == $c);
    var_dump($c == $b);
    var_dump($a != $b);
    var_dump($a != $c);
    var_dump($c != $b);
    var_dump($a === $b);
    var_dump($a === $c);
    var_dump($c === $b);
    var_dump($a !== $b);
    var_dump($a !== $c);
    var_dump($c !== $b);
    ?>

    <h1>Exercice 6 : Condition</h1>
    <?php
    $mon_age = 35;
    if($mon_age >= 18){
        echo "Vous êtes un adulte !";
    }else{
        echo "Vous n'êtes pas un adulte !";
    }
    ?>


<h1>STUCUTUR DE DONNEE</h1>
<h2>Exo 1</h2>
<?php
$budget = 1234.56;
$achats = 1357.99;

if($budget >= $achats){
    echo "Vous avez assez de budget";
}else {
    echo "vous n'avez pas le budget";
}

$sexe = "homme";
switch ($sexe) {
    case 'homme':
        echo " vous etes un homme ";
        break;
    
    case "femme":
        echo "vous etes une femme ";
        break;
    default:
        break;
}
?>

<h2>exo 3</h2>

<?php
$heure =6;

// if($heure >=6 && $heure <= 12){
//     echo "nous somme le matin";
// }elseif($heure >=13 && $heure <= 17){
//     echo "nous somme l'après-midi";
// }elseif($heure >=18 || $heure <= 5){
//     echo " nous somme le soir";
// }else{
//     echo "entrez une horaire valide";
// }



switch($heure){
    case $heure >23 :
    echo "entrez une valeur valide";
    break;

    case $heure >=6 && $heure <= 12:
        echo "nous somme le matin ";
        if($heure <= 9){
            echo "c'est l'heure du petit dej";
        }elseif($heure >=10 && $heure <= 11){
            echo "c'est l'heure du brunch";
        }else{
            echo "c'est l'heure du dejeuner";
        }
    break;
    
    case $heure >=13 && $heure <= 17:
        echo "nous somme l'après-midi ";
        if($heure <= 14){
            echo "c'est l'heure du dejeuner";
        }else{
            echo "c'est l'heure du gouter";
        }
    break;

    case $heure >=18 || $heure <= 5:
        echo "nous somme le soir ";
        if($heure <=20){
            echo "c'est l'heure du diner";
        }else{
            echo "ce n'est plus l'heure de manger";
        }
    break;
} echo "<br>"

// for($i=1; $i<= 10; $i++){
//     echo "<p>Bonjour tout le monde ". $i." fois </p>";
// }
// $j= 1;
// while($j <= 10){
//     echo "<p>Bonjour tout le monde ". $j." fois </p>";
//     $j++;
// }

?>

<?php
for($i=1; $i<=5; $i++){

        for($j=0; $j<$i; $j++){
        echo $j;
        }
        echo "<br>";
}
?>

<?php

for($x =0 ; $x<=10; $x++){

echo "<p>$x x  5 = ". $x*5 . "</p> <br>";
}

?>

<?php

for ($a=0; $a<=20; $a+=2){
     echo $a . "<br>"; 
}


?>

<h1>Les Tableaux</h1>
<?php
$tab1 = array("24", "Adèle", 1.75);
var_dump($tab1);

$tab2[] = 24;
$tab2[] = "Adèle";
$tab2[] = 1.75;

var_dump($tab2)
?>

<?php

$personnes = array(
    'ryan' => 16,
    'lulu' => 19,
    'sacha' => 66
);

echo $personnes["lulu"] ;

$cocktails = array('Mojito', 'Long Island Iced Tea', 'Gin Fizz', 'Moscow mule');
echo "<br>". $cocktails[1]."<br>";
echo count($personnes). "<br>";


$pays_population = array(
    'France' => 6752424654,
    'Suede' => 65646488,
    'Suise' => 64768568468,
    'Kosovo' => 458975487,
    'Malte' => 555674,
    'Mexique' => 1544656,
    'Allemagne' => 5546556,
);

echo count($pays_population);



?>

<h1>Exo tableau</h1>
<h2>Exo 1</h2>
<?php
$prenoms = array("Salimou","Bobo","joe","Maxime","leo","rick","alex","axel","zack","téo");
print_r($prenoms);
?>
<h2>Exo 2,3,4</h2>

<?php

$name = array(
    "Salimou" => 23,
    "Bob" => 22,
    "Joe" => 56,
    "Maxime" => 85,
    "Léo" => 58,
);

var_dump($name);
echo count($name);


echo '<table style="border: 1px solid black;"><thead style="background-color: grey;":;"><tr><td style="color: white;">Prenom</td><td style="color: white;">Age</td></tr></thead>';
foreach ($name as $prenom => $age){
echo "<tr><td>$prenom</td><td>$age</td></tr>";
}
echo"</table>";
?>
<h1>Exo 1</h1>

<?php

$listpays =  array(
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "italie" => "Rome",
);

foreach($listpays as $pays => $capital){
   echo "<p>$pays a pour capital $capital</p> <br>";
}


$tableau = [];

for($i=0; $i <= 9; $i++){

    array_push($tableau, rand(0,50));
};
print_r($tableau);
$clef = array_search("25", $tableau);
if($clef == true){
    echo " la clef du numéro 25 est le n°$clef";
}


var_dump($tableau)
?>


<table>
  <table style="border: 2px solid black;">
        <thead>
            <tr>
                <td>key</td>
                <td>Value</td>
            </tr>
        </thead>
        <tbody>

<?php
$vehicules=array(
    "11 ABC 92" => array(
        "marque"=>"Citröen",
        "modele" => "Saxo",
        "couleur" => "Bleue"
    ),
    "19 OPQ 92" => array(
        "marque"=>"Citröen",
        "modele" => "Xsara Picasso",
        "couleur" => "Verte"
    ),
    "67 XYZ 83" => array(
        "marque"=>"Peugeot",
        "modele" => "3008",
        "couleur" => "Blanche"
    ),
    );

    foreach ($vehicules as $plaque => $type){

echo "<tr><td>$plaque</td><td><table><tr><td>key</td><td>value</td></tr>";

// echo "<tr rowspan = '3'><td>$plaque</td><td> <tr><td>key</td> <td>Value</td></tr> </td></tr>";
        foreach ($type as $nametype => $donnee){

            
// echo "<tr><td></td><td>$nametype</td><td>$donnee</td></tr>";
            
        }
}

?>


</table>
