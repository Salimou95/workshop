<html>
<body>
    
<h1>Exo : Genre</h1>
<?php
$genre = "homme";
if($genre == "homme"){
    echo "Vous êtes un homme";
}else{
    echo "vous êtes une femme";
}
?>
<h2>Exo : Age</h2>
<?php
$age = 19;
if ($age >= 18){
    echo " vous êtes majeur";
}else{
    echo "vous mineur";
}
?>

<h1>Exo : Heure</h1>
<?php
$heure =15;

if($heure >=6 && $heure <= 12){
    echo "nous somme le matin";
}elseif($heure >=13 && $heure <= 17){
    echo "nous somme l'après-midi";
}elseif($heure >=18 && $heure <= 5){
    echo " nous somme le soir";
}else{
    echo "entrez une horaire valide";
}

?>

<h1>Exo : Fruit</h1>

<?php
$fruit = "Pomme";
echo "vous avez mangé une $fruit "
?>
</body>
</html>
