<?php
//sert à l'administation pour afficher de nouvelle Q/R
require('config.php');
require('model-function/database.fn.php');
require('model-function/faq.fn.php');
$pdo = getPDO($config);

include('Vues-templates/_header.php');
include('Vues-templates/form/faq-form.php');

if (!empty($_POST['recherche'])){

    $data = array(
        'mot' => $_POST['recherche']
    );

    if(add($pdo, $data)){
    header("Location: suggestion.php?state=succes");
    
    }
    else{
        header("Location: suggestion.php?state=error");
        var_dump($data);
    }   
}






include('Vues-templates/_footer.php');

?>