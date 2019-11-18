<?php 

try { 
    $bdd = new PDO('mysql:host='.$config['host'].';dbname='.$config['database'], $config['username'],$config['password'], array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')); 
} 
catch (Exception $e) { 
    die('Erreur : '.$e->getMessage()); 
} 

$term =$_GET['term'];
 
    $reponse = $bdd->prepare('SELECT * FROM liste WHERE mot LIKE :term'); 
    $reponse->execute(array('term' => '%'.$term.'%')); 
    $liste = array(); 
 
    while($donnees = $reponse->fetch()) { 
        $a = count($liste); 
    // formatage de l'affichage des données de la liste 
        $liste[$a] = $donnees['mot']; 
        //array_push($array, $donnees['mot']);
    } 
 
    json_encode($liste);
 
?>