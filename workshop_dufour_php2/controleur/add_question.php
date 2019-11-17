<?php
//sert à l'administation pour afficher de nouvelle Q/R
require('config.php');
require('model-function/database.fn.php');
require('model-function/faq.fn.php');
$pdo = getPDO($config);


if (!empty($_POST['question']) AND !empty($_POST['answer'])){

    $data = array(
        'question' =>$_POST['question'],
        'answer' =>$_POST['answer']
    );

    if(add($pdo, $data)){
    header("Location: add_question.php?state=succes");
    
    }
    else{
        header("Location: add_question.php?state=error");
    }   
}





include('Vues-templates/_header.php');
include('Vues-templates/form/faq-form.php');
include('Vues-templates/_footer.php');

?>