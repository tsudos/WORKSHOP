<?php 
require('config.php');
require('model-function/database.fn.php');
require('model-function/TP.fn.php');
$pdo = getPDO($config);

 
    $reponse = $bdd->prepare('SELECT * FROM liste WHERE mot LIKE :req'); 
    $reponse->execute(array('req' => '%'.$_GET['req'].'%')); 
    $liste = array(); 
 
    while($donnees = $reponse->fetch()) { 
        $a = count($liste); 
    // formatage de l'affichage des données de la liste 
        $liste[$a] = $donnees['mot']; 
    } 
 
    echo json_encode($liste);     
?>