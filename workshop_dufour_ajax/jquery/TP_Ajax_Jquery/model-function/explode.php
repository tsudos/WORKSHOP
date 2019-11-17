<!--différents templates HTML-->
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
    <title>suggestions</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <style type="text/css">
            body{
                        background-color: #444444;
                        color : white;
                        font-size:20px;
                    }
    
            .jumbotron {
                background-color : #444444;
                color : grey;
                padding : 0 0 0 0;
            }
            li a {
                color : grey;
            }
            li a:hover {
                color : white;
            }
            .list{
                list-style:none;
                color : grey;
                padding-right:50px;
            }
            legend{
                color : grey;
                text-align:center;
            }
            #ensemble {
                width:750px;
                padding-left:200px;
                text-align: center;
            }
            button, input {
                border-radius :0.25rem;
                opacity : 0.8;
            }

    </style>
</head>
<body>
<div id="ensemble">
<h1 class='jumbotron'>WorkShop_Ajax</h1>
<ul class="list-inline">
    <li><a href="../listedemot.php">liste de mot</a></li>
    <li><a href="../suggestion.php">suggestion</a></li>
    <li><a href="#">ajout de la liste de départ pour la base de donnée : </a>
        <ul>
            <li class ="list">->base de donnée dans mySQL : db_autocomp.</li>
            <li class ="list">->table de la base de donnée : liste.</li>
            <li class ="list">->colonnes de la table : id, mot.</li>
        </ul>
    </li>
</ul>

<?php

require('../config.php');
require('database.fn.php');
require('faq.fn.php');
$pdo = getPDO($config); 

$faq=show($pdo);

$val1 = $faq[0]['mot'];
$length2=count($faq);


//pb avec 'forme : carré' et 'pâte à modeler' il faudrait que je fasse une condition si entre deux ' il y a des espaces alors on n'enleve pas les espaces
    if (!$fp = fopen("listeMot.txt","r"))
    {echo "Echec de l'ouverture du fichier";}
    else {
        $contenu = fread($fp, 3000);
        $arraynote1 = explode('\'', $contenu );
        $arrayimplode = implode($arraynote1);
        $arraynote2 = explode(',', $arrayimplode);
        $arrayimplode2 = implode($arraynote2);
        $arraynote3 = explode(' ', $arrayimplode2);

        $length= count($arraynote3)-1;
        $i=0;
        while($i<=$length)
        {
            echo $i.' : '.$arraynote3[$i]."<br/>";
            $i++;

            //tant que la condition n est pas trouvé
            if (($val1 != $arraynote3[0]) AND (($length+1) !== $length2)) {
                //echo $val1.'  '.$arraynote3[0].' '.$length.' '.$length2.'<br>';
                $array = add($pdo, $arraynote3[$i]);
            }
        }
    }

    fclose($fp); 






include('../Vues-templates/_footer.php');
?>