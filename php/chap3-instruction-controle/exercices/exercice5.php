<?php
/*
 * Choisissez un nombre de trois chiffres. Effectuez ernsuite des tirages aléatoires, et comptez le nombre de tirage
 * necessaire pour obtenir le nombre initial. Arretez les tirages et afficher le nombre de coups realises. Realisez ce
 * script d'abord avec l'instruction while puis avec l'instruction for
*/

$nombre = 667;
$cpt = 0;

while (true){
    $nbr_alea = rand(100,999);
    $cpt++;

    if ($nbr_alea=== $nombre){
        break;
    }
}


for ($i=0; $i<10000; $i++){
    $nbr_ale = rand(100,999);

    if ($nbr_ale === $nombre){

break;    }

}
echo "<p>Le nombre de coups realisé avec la methode for est $i </p>";

echo "<p>Le nombre de coups realisé avec la methode while est $cpt </p>";

