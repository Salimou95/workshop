<?php
function isConnected(){
    return !empty($_SESSION['membre'])? $_SESSION['membre']:false;
}
function isAdmin(){

    if(isConnected() && $_SESSION['membre']['statut'] ==1){

        return $_SESSION['membre'];

    }
}
?>