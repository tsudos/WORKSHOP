<!--différents templates HTML-->
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
    <title>suggestions</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <link type="text/css" href="jquery-ui/css/smoothness/jquery-ui-1.10.3.custom.css" rel="stylesheet" />
    
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
<script type="application/javascript" src="jquery-ui/js/jquery-1.9.1.js"></script> 
<script type="application/javascript" src="jquery-ui/js/jquery-ui-1.10.3.custom.js"></script>
<body>
<div id="ensemble">
<h1 class='jumbotron'>WorkShop_Ajax</h1>
<ul class="list-inline">
    <li><a href="listedemot.php">liste de mot</a></li>
    <li><a href="suggestion.php">suggestion</a></li>
    <li><a href="model-function/explode.php">ajout de la liste de départ pour la base de donnée (1ere connection)</a></li>
</ul>