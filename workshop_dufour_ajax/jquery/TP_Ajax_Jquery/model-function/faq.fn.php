<?php
//comprend toutes les fonctions en rapport avec le TP
//function show(PDO $pdo) afficher lemot  de la base de donnée db_autocomp
function show(PDO $pdo){
    $sql = "SELECT * FROM liste ORDER BY id ASC";
    $result = $pdo->query($sql);
    $row=$result->fetchAll(PDO::FETCH_ASSOC);
    return $row;
}


//function add(PDO $pdo, array $data) -- ajout des mots nouveau à la liste de la base
function add(PDO $pdo, array $data){
    $mot = $pdo->quote($data['mot']);
    $sql = 'INSERT INTO list(mot) VALUES (:mot)';
    $result = $pdo->prepare($sql);
    return $result->execute(array(
        ':mot'=> $mot
    ));
}

?>