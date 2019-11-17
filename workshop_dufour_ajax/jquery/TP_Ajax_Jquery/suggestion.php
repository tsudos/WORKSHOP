<?php
//sert à l'administation pour afficher de nouvelle Q/R
require('config.php');
require('model-function/database.fn.php');
require('model-function/faq.fn.php');
$pdo = getPDO($config);



//mise en page
include('Vues-templates/_header.php');
include('Vues-templates/form/faq-form.php');

//conditions
if (!empty($_POST['recherche'])){

    $data = $_POST['recherche'];

    if(add($pdo, $data)){
    header("Location: suggestion.php?state=succes");
    
    }
    else{
        header("Location: suggestion.php?state=error");
        
    }   
}

$faq=show($pdo);


echo '<p>';
foreach ($faq as $key => $value) {

    echo  ' \''.nl2br(htmlspecialchars($value['mot'])).'\',';

}
echo '</p>';









include('Vues-templates/_footer.php');

?>