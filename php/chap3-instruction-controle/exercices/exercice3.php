<?php
/* TODO: Effectuez une suite de tirage de nombres aleatoires jusqu'a obtenir une suite composee d'un nombre pair suivi
 * de deux nombres impairs.
*/


//Tirage du nombre pair

while (true){
    $nbr = rand(1,100);
    if ($nbr %2 ==0){

        break;
    }
}
// Tirage du premier nombre impair
while (true){
    $nbr1 = rand(1,100);
    if ($nbr1 %2 !=0){

        break;
    }
}
// Tirage du second nombre premier
while (true){
    $nbr2 = rand(1,100);
    if ($nbr2 %2 !=0){

        break;
    }
}
// Affichage de la sequence
echo "<p style='font-weight: bold'>$nbr $nbr1 $nbr2<p/>";
