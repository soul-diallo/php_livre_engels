<?php

echo "<h2> Reviser votre table de multiplication</h2>";
// Debut du tableau HTML
echo "<table border=\"2\" style = \"background-color:yellow\"> <th>&nbsp;X &nbsp;</th>";
// Creation de la premiere ligne
for ($a=1;$a<10;$a++) {
    echo "<th>&nbsp;$a&nbsp;</th>";
}
for ($i=1;$i<10;$i++){
        echo "<tr><th>&nbsp;$i&nbsp;</th>";
        for ($j=1;$j<10;$j++){
            echo "<td style='background-color: red'>&nbsp;&nbsp; <b>". $i*$j."&nbsp;&nbsp; </td>";
        }
        echo "</b></td>";
    }
echo "</table>";

