<?php
// Konstante definieren
define("PI", 3.14159);

// Variablen deklarieren und initialisieren
$zahl1 = 10;
$zahl2 = 5;
$ergebnis = 0;

// Addition
$ergebnis = $zahl1 + $zahl2;
echo "Addition: $zahl1 + $zahl2 = $ergebnis\n<br/>";

// Subtraktion
$ergebnis = $zahl1 - $zahl2;
echo "Subtraktion: $zahl1 - $zahl2 = $ergebnis\n<br/>";

// Multiplikation
$ergebnis = $zahl1 * $zahl2;
echo "Multiplikation: $zahl1 * $zahl2 = $ergebnis\n<br/>";

// Division
$ergebnis = $zahl1 / $zahl2;
echo "Division: $zahl1 / $zahl2 = $ergebnis\n<br/>";

// Modulo
$ergebnis = $zahl1 % $zahl2;
echo "Modulo: $zahl1 % $zahl2 = $ergebnis\n<br/>";

// Potenzierung
$ergebnis = pow($zahl1, $zahl2);
echo "Potenzierung: $zahl1 ^ $zahl2 = $ergebnis\n<br/>";

// Wurzelberechnung
$ergebnis = sqrt($zahl1);
echo "Wurzelberechnung: sqrt($zahl1) = $ergebnis\n<br/>";

// Kreisumfang berechnen
$radius = 5;
$umfang = 2 * PI * $radius;
echo "Kreisumfang mit Radius $radius: $umfang\n<br/>";

// Post-Inkrement
$zahl3 = 5;
$zahl4 = $zahl3++; // Post-Inkrement: $zahl4 erhält den Wert von $zahl3 VOR der Inkrementierung
echo "Post-Inkrement: $zahl4\n<br/>";
echo "Nach dem Post-Inkrement: $zahl3\n<br/>";

// Post-Dekrement
$zahl5 = 10;
$zahl6 = $zahl5--; // Post-Dekrement: $zahl6 erhält den Wert von $zahl5 VOR der Dekrementierung
echo "Post-Dekrement: $zahl6\n<br/>";
echo "Nach dem Post-Dekrement: $zahl5\n<br/>";

// Pre-Inkrement
$zahl7 = 5;
++$zahl7; // Pre-Inkrement: $zahl7 wird vor der Verwendung inkrementiert
echo "Pre-Inkrement: $zahl7\n<br/>";

// Pre-Dekrement
$zahl8 = 10;
--$zahl8; // Pre-Dekrement: $zahl8 wird vor der Verwendung dekrementiert
echo "Pre-Dekrement: $zahl8\n<br/>";

// Verkürzte Schreibweise für Wertzuweisungen
$zahl9 = 10;
$zahl9 += 5; // $zahl9 = $zahl9 + 5
echo "Verkürzte Schreibweise +=: $zahl9\n<br/>";

$zahl10 = 10;
$zahl10 -= 5; // $zahl10 = $zahl10 - 5
echo "Verkürzte Schreibweise -=: $zahl10\n<br/>";

$zahl11 = 10;
$zahl11 *= 5; // $zahl11 = $zahl11 * 5
echo "Verkürzte Schreibweise *=: $zahl11\n<br/>";

$zahl12 = 10;
$zahl12 /= 5; // $zahl12 = $zahl12 / 5
echo "Verkürzte Schreibweise /=: $zahl12\n<br/>";

$zahl13 = 10;
$zahl13 %= 7; // $zahl13 = $zahl13 % 7
echo "Verkürzte Schreibweise %=: $zahl13\n<br/>";

$zahl14 = 2;
$zahl14 **= 3; // $zahl14 = $zahl14 ** 3
echo "Verkürzte Schreibweise **=: $zahl14\n<br/>";

// Verkürzte Schreibweise für das Konkatenieren von Zeichenketten
$text1 = "Hello";
$text2 = " World!";
$text1 .= $text2; // $text1 = $text1 . $text2
echo "Verkürzte Schreibweise .=: $text1\n<br/>";
?>
