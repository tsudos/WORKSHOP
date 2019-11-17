<?php
//sert à afficher la FAQ
require('config.php');
require('model-function/database.fn.php');
require('model-function/faq.fn.php');
$pdo = getPDO($config);
include('Vues-templates/_header.php');

$faq=show($pdo);

?>


<!-- Grid row -->
<div class="row accordion-gradient-bcg d-flex justify-content-center">

  <!-- Grid column -->
  <div class="col-md-10 col-xl-6 py-5">



<?php

foreach ($faq as $key => $value) {


    echo '<a href="#demo'.$key.'" class="btn btn-primary" data-toggle="collapse" data-target="#demo'.$key.'">'.nl2br(htmlspecialchars( $value['question'])).'</a>';

    echo  '<div id="demo'.$key.'" class="collapse show ">'.nl2br(htmlspecialchars($value['answer'])).'<br><br></div>';

}





//include('Vues-templates/form/faq-form.php');
include('Vues-templates/_footer.php');


?>
