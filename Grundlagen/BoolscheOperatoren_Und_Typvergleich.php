<?php
// Boolesche Operatoren und Datentypenvergleich

// Deklaration und Initialisierung von Variablen
$int_zahl1 = 10;
$int_zahl2 = 5;
$str_text = "Hello";
$bool_istWahr = true;
$bool_istFalsch = false;

// Ausgabe des reinen boolschen Werts. Da die Ergebnise nicht direkt ersichtlich sind 
// wird auf die Verwendung von ternären Operatoren für die schnell Ausgabe von wahr bzw.
// falsch zurückgegriffen.
echo "Reiner boolscher Wert (true): " . true . "<br>\n";     // Ausgabe: 1
echo "Reiner boolscher Wert (false): " . false . "<br>\n";   // Ausgabe:

// Logische Operatoren
$bool_ergebnisUnd = $bool_istWahr && $bool_istFalsch;  // logisches UND
$bool_ergebnisOder = $bool_istWahr || $bool_istFalsch; // logisches ODER
$bool_ergebnisNicht = !$bool_istWahr;             // logisches NICHT

// ternärer Operator: (boolscherWert ? Was_Wenn_Wahr : Was_Wenn_Falsch)

echo "Ergebnis UND: " . ($bool_ergebnisUnd ? "wahr" : "falsch") . "<br>\n";
echo "Ergebnis ODER: " . ($bool_ergebnisOder ? "wahr" : "falsch") . "<br>\n";
echo "Ergebnis NICHT: " . ($bool_ergebnisNicht ? "wahr" : "falsch") . "<br>\n";

// Vergleichsoperatoren
$bool_ergebnisGleich = $int_zahl1 == $int_zahl2;    // Gleichheitsvergleich
$bool_ergebnisUngleich = $int_zahl1 != $int_zahl2;  // Ungleichheitsvergleich
$bool_ergebnisGroesser = $int_zahl1 > $int_zahl2;   // Größer als
$bool_ergebnisKleiner = $int_zahl1 < $int_zahl2;    // Kleiner als
$bool_ergebnisGroesserGleich = $int_zahl1 >= $int_zahl2; // Größer oder gleich
$bool_ergebnisKleinerGleich = $int_zahl1 <= $int_zahl2;  // Kleiner oder gleich

echo "Ergebnis Gleich: " . ($bool_ergebnisGleich ? "wahr" : "falsch") . "<br>\n";
echo "Ergebnis Ungleich: " . ($bool_ergebnisUngleich ? "wahr" : "falsch") . "<br>\n";
echo "Ergebnis Größer: " . ($bool_ergebnisGroesser ? "wahr" : "falsch") . "<br>\n";
echo "Ergebnis Kleiner: " . ($bool_ergebnisKleiner ? "wahr" : "falsch") . "<br>\n";
echo "Ergebnis Größer oder Gleich: " . ($bool_ergebnisGroesserGleich ? "wahr" : "falsch") . "<br>\n";
echo "Ergebnis Kleiner oder Gleich: " . ($bool_ergebnisKleinerGleich ? "wahr" : "falsch") . "<br>\n";

// Datentypenvergleich
$bool_ergebnisGleichTyp = $int_zahl1 === $str_text;     // Gleichheitsvergleich mit Typ
$bool_ergebnisUngleichTyp = $int_zahl1 !== $str_text;   // Ungleichheitsvergleich mit Typ

echo "Ergebnis Gleich mit Typ: " . ($bool_ergebnisGleichTyp ? "wahr" : "falsch") . "<br>\n";
echo "Ergebnis Ungleich mit Typ: " . ($bool_ergebnisUngleichTyp ? "wahr" : "falsch") . "<br>\n";
?>
