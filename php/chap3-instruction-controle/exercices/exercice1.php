<?php
/*
Redigez une expression conditionnelle pour tester si un nombre est a la fois un multiple de 3 et 5
*/

$nombre = 14;

if ($nombre%5==0 and $nombre%3==0){
    echo "Ce nombre est a la fois multiple de 3 et 5";
}
else echo "Ce nombre n'est pas un multiple de 3 et 5";
