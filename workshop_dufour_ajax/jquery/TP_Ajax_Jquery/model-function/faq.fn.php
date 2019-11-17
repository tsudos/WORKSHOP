<?php
//comprend toutes les fonctions en rapport avec le système faq
//function show(PDO $pdo) afficher les Q/R de la base de donnée
function show(PDO $pdo){
    $sql = "SELECT * FROM faq ORDER BY id ASC";
    $result = $pdo->query($sql);
    $row=$result->fetchAll(PDO::FETCH_ASSOC);
    return $row;
}


//function add(PDO $pdo, array $data) -- ajout des Q/R via le formulaire
function add(PDO $pdo, array $data){
    $question = $pdo->quote($data['question']);
    $answer = $pdo->quote($data['answer']);
    //$sql = 'INSERT INTO faq SET question = :question, answer = :anwser';
    $sql = 'INSERT INTO faq(question, answer) VALUES (:question,:anwser)';
    $result = $pdo->prepare($sql);
    return $result->execute(array(
        ':question'=> $question,
        ':anwser'=> $answer
    ));
}

?>