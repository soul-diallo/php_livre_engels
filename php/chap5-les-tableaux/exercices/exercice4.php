<?php

/* Utilisez une boucle while pour lire les tableaux des exercices 1 et 2. */

//**********Exercice 1***********

$tableau = array(
    "Diallo" =>["Souleymane","Conakry",23],
    "Uzumaki"=>["Naruto","Konoha",25],
    "Nara"=>["Shikamaru","Konoha",26],
    "Kinzoko"=>["Batto","Arc City",29],
    "Tradarzi"=>["Gallopacho","Napoli",35]
);

$element = each($tableau);
echo $element[0];
while ($element = each($tableau)) {
    //echo "Son nom est <b>$element[0]</b><br>";

//    while ($val=each($element[1])) {
//        echo " son prenom est <b>{$val["value"]}</b> Il habite a <b>{$val["value"]}</b> et il a <b>{$val["value"]}</b> ans.<br>";
//    }

}
