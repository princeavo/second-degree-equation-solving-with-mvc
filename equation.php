<?php
$partie = 0;//Par défaut on affiche le formulaire de résolution d'équation
$message = "";
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $partie = 1;//On affiche le résultat de la résolution de l'équation
    $x1 = null;
    $x2 = null;
    $x0 = null;
    $message = "L'équation ";
    //Le formulaire de résolution d'équation  est soumit
    extract($_POST);//On va extraire les variables du tableau $_POST
}
include_once './controler/index.php';