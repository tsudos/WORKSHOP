<?php
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
        echo $arraynote3[$i]."<br/>";
        $i++;
    }
}
 fclose($fp); 

?>