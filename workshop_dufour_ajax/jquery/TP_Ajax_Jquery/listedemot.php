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

foreach ($faq as $key => $value) {

    echo  '<div id="demo'.$key.'" class="collapse show ">'.nl2br(htmlspecialchars($value['mot'])).'<br><br></div>';

}





//include('Vues-templates/form/faq-form.php');
include('Vues-templates/_footer.php');


?>
