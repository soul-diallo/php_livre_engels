<?php

echo"<h3>Votre facture </h3>";

echo sprintf("<b>%'_25s %'_25s %'_25s <br /></b>","Prix H.T.","T.V.A","Prix T.T.C.");
$ht[1] = 27.55;
$ht[2] = 3450.40;
$ht[3] = 320.75;
for ($i=1;$i<4;$i++){
    echo sprintf("%'_20.2f %'_22.2f %'_20.2f <br/>",$ht[$i],$ht[$i]*0.196,$ht[$i]*1.196);
    $total+=$ht[$i];
}
echo str_repeat("*",71),"<br/>";
