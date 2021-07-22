<?php
/*
 *TODO: Ecrivez une expression conditionnelle utilisant les var $age et $sexe dans une instruction if pour selectionner
 * une personne de sexe feminin dont l'age est compris entre 21 et 40 ans et afficher un message de bienvenue approprie
*/

$age = 26;
$sexe = "F";

if ($age>=21 and $age<40 and $sexe ==='F'){
    echo "Bienvenue madame vous avez ",$age," ans";
}
