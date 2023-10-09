<?php
var_dump($_GET);

if(isset($_GET["input1"])){
    if(!empty($_GET["input1"])){
        echo "Bienvenue";
    }else{
        echo "Probleme 2";
    }
}else{
 echo "probleme";
}

?>