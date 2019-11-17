<?php
//sert à afficher la liste des mots de la BD
require('config.php');
require('model-function/database.fn.php');
require('model-function/TP.fn.php');
$pdo = getPDO($config);
include('Vues-templates/_header.php');

$tp=show($pdo);

?>



<?php

echo '<p>';
foreach ($tp as $key => $value) {

    echo  ' \''.nl2br(htmlspecialchars($value['mot'])).'\',';

}
echo '</p>';

include('Vues-templates/_footer.php');
?>
