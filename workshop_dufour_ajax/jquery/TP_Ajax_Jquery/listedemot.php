<?php
//sert à afficher la FAQ
require('config.php');
require('model-function/database.fn.php');
require('model-function/faq.fn.php');
$pdo = getPDO($config);
include('Vues-templates/_header.php');

$faq=show($pdo);

?>



<?php

echo '<p>';
foreach ($faq as $key => $value) {

    echo  ' \''.nl2br(htmlspecialchars($value['mot'])).'\',';

}
echo '</p>';

include('Vues-templates/_footer.php');
?>
