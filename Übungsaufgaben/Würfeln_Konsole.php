<?php
function wuerfel_ausgabe($str_spielername, $int_anzahl_runden) {
    echo "Hallo $str_spielername !\n";
    echo "Wurf-Nr\tAugenzahl\n";

    for ($i=1; $i <= $int_anzahl_runden; $i++) { 
        echo "   $i\t    ".rand(1,6)."\n";
    }

}

wuerfel_ausgabe("Bernd", 10)
?>