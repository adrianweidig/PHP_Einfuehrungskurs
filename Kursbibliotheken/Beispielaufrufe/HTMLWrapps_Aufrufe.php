<?php

require_once "..\HTMLWrapps.php";

// Beispielaufruf:
$str_seiteTitel = "Meine Webseite";
$str_seiteInhalt = "Willkommen auf meiner Webseite!";

// Array für die Tabelle

// Jeder weitere Wert erzeugt eine weitere Spalte
$arr_daten = array(
    array('Wurf-Nr', 'Augenzahl'),
    array('1', rand(1,6), rand(1,6)),
    array('2', rand(1,6)),
    array('3', rand(1,6), rand(1,6)),
    array('4', rand(1,6)),
    array('5', rand(1,6)),
    array('6', rand(1,6)),
    array('7', rand(1,6)),
    array('8', rand(1,6), rand(1,6)),
    array('9', rand(1,6)),
    array('10', rand(1,6))
);

// Aufruf der Funktionen
generiereHeader($str_seiteTitel);

echo "<h1>$str_seiteTitel</h1>";
echo "<div>$str_seiteInhalt</div>";

generiereTabelle($arr_daten, "Tabellentitel 1");

generiereFooter();
?>