<?php
// Zeichenketten und Ausgabe

// Deklaration und Zuweisung
$str_kind = "John Doe";
$str_mutter = "Anneliese Doe";

// Konkatenation von Zeichenketten
$str_begruessung = "Hallo, " . $str_kind . "! Du bist das Kind von " . $str_mutter . ".";

// Praktische Zusatzfunktionen
$int_laenge = strlen($str_begruessung);
$str_grossbuchstaben = strtoupper($str_kind);
$str_kleinbuchstaben = strtolower($str_kind);
$str_teilzeichenkette = substr($str_kind, 0, 4);

// Zuweisung einzelner Zeichen (ab PHP 8)
$str_kind[0] = "M";


// Ausgabe der Ergebnisse

// Beispiel für echo
echo $str_begruessung . "\n<br/>";
echo "Länge: " . $int_laenge . "\n<br/>";


// Beispiel für print
print "Großbuchstaben: " . $str_grossbuchstaben . "\n<br/>";
print "Kleinbuchstaben: " . $str_kleinbuchstaben . "\n<br/>";


// Beispiel für printf
printf("Teilzeichenkette: %s\n<br/>", $str_teilzeichenkette);
printf("Modifizierter Kindname: %s\n<br/>", $str_kind);

// TBD mehrere Möglichkeiten mit printf

// Strings vergleichen
$str_gruss = "Hallo";
$str_abschied = "Auf Wiedersehen";

$str_vergleich = ($str_gruss == $str_abschied) ? "gleich" : "unterschiedlich";
echo "Die Strings sind " . $str_vergleich . "<br>\n";
?>
