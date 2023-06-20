<?php
$baumhoehe = 6;
$stammhoehe = 4;

for ($zeile = 1; $zeile <= $baumhoehe; $zeile++) {
    // Leerzeichen vor dem Baum
    for ($leerzeichen = $baumhoehe - $zeile; $leerzeichen > 0; $leerzeichen--) {
        echo " ";
    }

    // Baumzeichen
    for ($stern = 1; $stern <= (2 * $zeile - 1); $stern++) {
        echo "x";
    }

    echo "\n";
}

// Stamm des Baums
for ($zeile = 1; $zeile <= $stammhoehe; $zeile++) {
    echo "    xxx\n";
}
?>


