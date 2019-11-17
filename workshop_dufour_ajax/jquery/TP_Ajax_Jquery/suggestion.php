<?php
//sert à l'administation pour afficher
require('config.php');
require('model-function/database.fn.php');
require('model-function/TP.fn.php');
$pdo = getPDO($config);



//mise en page
include('Vues-templates/_header.php');
include('Vues-templates/form/TP-form.php');

//conditions pour rajouté un mot à la base de donné -> voir apres pr passer en ajax les données dans le fichier listeMot.txt
/*  if (!empty($_POST['recherche'])){
    $data = $_POST['recherche'];
    if(add($pdo, $data)){
    header("Location: suggestion.php?state=succes");
    }
    else{
        header("Location: suggestion.php?state=error");   
    }   
}  */


$tp=show($pdo);
//pr voir la liste des mots en direct
echo '<p>';
foreach ($tp as $key => $value) {
    echo  ' \''.nl2br(htmlspecialchars($value['mot'])).'\',';
}
echo '</p>';


include('Vues-templates/_footer.php');
?>