<?php
// Variablen und Standardoperatoren

// Konstante definieren
define("PI", 3.14159);

// Variablen deklarieren und initialisieren
$int_zahl1 = 10;
$int_zahl2 = 5;
$int_ergebnis = 0;

// Addition
$int_ergebnis = $int_zahl1 + $int_zahl2;
echo "Addition: $int_zahl1 + $int_zahl2 = $int_ergebnis\n<br/>";

// Subtraktion
$int_ergebnis = $int_zahl1 - $int_zahl2;
echo "Subtraktion: $int_zahl1 - $int_zahl2 = $int_ergebnis\n<br/>";

// Multiplikation
$int_ergebnis = $int_zahl1 * $int_zahl2;
echo "Multiplikation: $int_zahl1 * $int_zahl2 = $int_ergebnis\n<br/>";

// Division
$int_ergebnis = $int_zahl1 / $int_zahl2;
echo "Division: $int_zahl1 / $int_zahl2 = $int_ergebnis\n<br/>";

// Modulo
$int_ergebnis = $int_zahl1 % $int_zahl2;
echo "Modulo: $int_zahl1 % $int_zahl2 = $int_ergebnis\n<br/>";

// Potenzierung
$int_ergebnis = pow($int_zahl1, $int_zahl2);
echo "Potenzierung: $int_zahl1 ^ $int_zahl2 = $int_ergebnis\n<br/>";

// Wurzelberechnung
$int_ergebnis = sqrt($int_zahl1);
echo "Wurzelberechnung: sqrt($int_zahl1) = $int_ergebnis\n<br/>";

// Kreisumfang berechnen
$int_radius = 5;
$float_umfang = 2 * PI * $int_radius;
echo "Kreisumfang mit Radius $int_radius: $float_umfang\n<br/>";

// Post-Inkrement
$int_zahl3 = 5;
$int_zahl4 = $int_zahl3++; // Post-Inkrement: $zahl4 erhält den Wert von $zahl3 VOR der Inkrementierung
echo "Post-Inkrement: $int_zahl4\n<br/>";
echo "Nach dem Post-Inkrement: $int_zahl3\n<br/>";

// Post-Dekrement
$int_zahl5 = 10;
$int_zahl6 = $int_zahl5--; // Post-Dekrement: $zahl6 erhält den Wert von $zahl5 VOR der Dekrementierung
echo "Post-Dekrement: $int_zahl6\n<br/>";
echo "Nach dem Post-Dekrement: $int_zahl5\n<br/>";

// Pre-Inkrement
$int_zahl7 = 5;
++$int_zahl7; // Pre-Inkrement: $zahl7 wird vor der Verwendung inkrementiert
echo "Pre-Inkrement: $int_zahl7\n<br/>";

// Pre-Dekrement
$int_zahl8 = 10;
--$int_zahl8; // Pre-Dekrement: $zahl8 wird vor der Verwendung dekrementiert
echo "Pre-Dekrement: $int_zahl8\n<br/>";

// Verkürzte Schreibweise für Wertzuweisungen
$int_zahl9 = 10;
$int_zahl9 += 5; // $zahl9 = $zahl9 + 5
echo "Verkürzte Schreibweise +=: $int_zahl9\n<br/>";

$int_zahl10 = 10;
$int_zahl10 -= 5; // $zahl10 = $zahl10 - 5
echo "Verkürzte Schreibweise -=: $int_zahl10\n<br/>";

$int_zahl11 = 10;
$int_zahl11 *= 5; // $zahl11 = $zahl11 * 5
echo "Verkürzte Schreibweise *=: $int_zahl11\n<br/>";

$int_zahl12 = 10;
$int_zahl12 /= 5; // $zahl12 = $zahl12 / 5
echo "Verkürzte Schreibweise /=: $int_zahl12\n<br/>";

$int_zahl13 = 10;
$int_zahl13 %= 7; // $zahl13 = $zahl13 % 7
echo "Verkürzte Schreibweise %=: $int_zahl13\n<br/>";

$int_zahl14 = 2;
$int_zahl14 **= 3; // $zahl14 = $zahl14 ** 3
echo "Verkürzte Schreibweise **=: $int_zahl14\n<br/>";

// Verkürzte Schreibweise für das Konkatenieren von Zeichenketten
$str_text1 = "Hello";
$str_text2 = " World!";
$str_text1 .= $str_text2; // $text1 = $text1 . $text2
echo "Verkürzte Schreibweise .=: $str_text1\n<br/>";
?>
