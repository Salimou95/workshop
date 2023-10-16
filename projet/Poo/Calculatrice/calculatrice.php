<?php

include("Class/calculatrice.class.php");

$mon_calcul = new Calculatrice($a,$b) ;

echo $mon_calcul->Addition([1,1,2],[0,1,1])."<br>";
// echo $mon_calcul->Soustraction(2,5)."<br>";
// echo $mon_calcul->Division(2,5)."<br>";
// echo $mon_calcul->Mutiplication(2,5)."<br>";

// if(isset($_POST['cal'])){
// $mon_calcul->Addition($_POST['a'],$_POST['b']);
// echo "<label>$resultat</label>";
// }
?>

<!-- <form action="calculatrice.php" method="post">
<input type="number" name="a">
<input type="number" name="b">
<label for=""></label>
 <button type="button" name="cal">Calculer</button>
</form> -->