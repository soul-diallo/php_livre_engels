<?php

/* Utilisez une boucle foreach pour lire les tableaux des exercices 1 et 2. */

// **********Exercice 1***********
$tableau = array(
    "Diallo" =>["Souleymane","Conakry",23],
    "Uzumaki"=>["Naruto","Konoha",25],
    "Nara"=>["Shikamaru","Konoha",26],
    "Kinzoko"=>["Batto","Arc City",29],
    "Tradarzi"=>["Gallopacho","Napoli",35]
);

// Decommenter la fonction pour voir le resultat

//foreach ($tableau as $cle=>$val) {
//    echo "Son nom est <b>$cle</b> et son prenom est <b>$val[0]</b> Il habite a <b>$val[1]</b> et il a <b>$val[2]</b>  ans<br>.";
//}

// *********Exercice 2************

$tableau_multi = array(
    "Barry" => array(
        "prenom"=>"Aissatou",
        "ville"=>"Toronto",
        "age"=>22
    ),
    "Sabri" => array(
        "prenom"=>"Gastalle",
        "ville"=>"Prude",
        "age"=>27
    ),
    "King" => array(
        "prenom"=>"Vato",
        "ville"=>"Milano",
        "age"=>23
    ),
    "Porticima" => array(
        "prenom"=>"Alajadrazo",
        "ville"=>"Pilatania",
        "age"=>25
    ),
);

foreach ($tableau_multi as $key=>$value) {
    echo "Son nom est <b>$key</b> et son prenom est <b>$value[prenom]</b> Il habite a <b>$value[ville]</b> et il a <b>$value[age]</b>  ans<br>.";
}
