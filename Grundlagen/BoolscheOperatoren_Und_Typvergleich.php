<?php
// Boolesche Operatoren und Datentypenvergleich

// intval sorgt dafür, dass der Integer-Wert angezeigt wird, sodass
// bei false nicht nur ein leeres Zeichen gezeigt wird

// Deklaration und Initialisierung von Variablen
$int_zahl1 = 10;
$int_zahl2 = 5;
$str_text = "Hello";
$bool_istWahr = true;
$bool_istFalsch = false;

// Ausgabe des reinen boolschen Werts. Da die Ergebnise nicht direkt ersichtlich sind 
// wird auf die Verwendung von ternären Operatoren für die schnell Ausgabe von wahr bzw.
// falsch zurückgegriffen.
echo "Reiner boolscher Wert (true): " . intval(true) . "<br>\n";     // Ausgabe: 1
echo "Reiner boolscher Wert (false): " . intval(false) . "<br>\n";   // Ausgabe: 0

// Logische Operatoren
$bool_ergebnisUnd = intval($bool_istWahr && $bool_istFalsch);  // logisches UND
$bool_ergebnisOder = intval($bool_istWahr || $bool_istFalsch); // logisches ODER
$bool_ergebnisNicht = intval(!$bool_istWahr);             // logisches NICHT
$bool_ergebnisXor = intval($bool_istWahr xor $bool_istFalsch); // logisches XOR
$bool_ergebnisXor2 = intval($bool_istWahr ^ $bool_istFalsch); // logisches XOR mittels ^

// Wahrheitstabelle UND
echo "
Wahrheitstabelle für logisches UND (&&):
true  && true   = " . intval(true && true) . "<br>
true  && false  = " . intval(true && false) . "<br>
false && true   = " . intval(false && true) . "<br>
false && false  = " . intval(false && false) . "<br>
<br>";

// Wahrheitstabelle ODER
echo "
Wahrheitstabelle für logisches ODER (||):
true  || true   = " . intval(true || true) . "<br>
true  || false  = " . intval(true || false) . "<br>
false || true   = " . intval(false || true) . "<br>
false || false  = " . intval(false || false) . "<br>
<br>";

// Wahrheitstabelle NICHT
echo "
Wahrheitstabelle für logisches NICHT (!):
!true  = " . intval(!true) . "<br>
!false = " . intval(!false) . "<br>
<br>";

// Wahrheitstabelle XOR
echo "
Wahrheitstabelle für logisches XOR (^):
true  ^ true   = " . intval(true ^ true) . "<br>
true  ^ false  = " . intval(true ^ false) . "<br>
false ^ true   = " . intval(false ^ true) . "<br>
false ^ false  = " . intval(false ^ false) . "<br>
<br>";

echo "
Wahrheitstabelle für logisches XOR (xor):
true  xor true   = " . intval(true xor true) . "<br>
true  xor false  = " . intval(true xor false) . "<br>
false xor true   = " . intval(false xor true) . "<br>
false xor false  = " . intval(false xor false) . "<br>
<br>";

// Vergleichsoperatoren
$bool_ergebnisGleich = intval($int_zahl1 == $int_zahl2);    // Gleichheitsvergleich
$bool_ergebnisUngleich = intval($int_zahl1 != $int_zahl2);  // Ungleichheitsvergleich
$bool_ergebnisGroesser = intval($int_zahl1 > $int_zahl2);   // Größer als
$bool_ergebnisKleiner = intval($int_zahl1 < $int_zahl2);    // Kleiner als
$bool_ergebnisGroesserGleich = intval($int_zahl1 >= $int_zahl2); // Größer oder gleich
$bool_ergebnisKleinerGleich = intval($int_zahl1 <= $int_zahl2);  // Kleiner oder gleich

echo "Ergebnis Gleich: " . intval($bool_ergebnisGleich) . "<br>\n";
echo "Ergebnis Ungleich: " . intval($bool_ergebnisUngleich) . "<br>\n";
echo "Ergebnis Größer: " . intval($bool_ergebnisGroesser) . "<br>\n";
echo "Ergebnis Kleiner: " . intval($bool_ergebnisKleiner) . "<br>\n";
echo "Ergebnis Größer oder Gleich: " . intval($bool_ergebnisGroesserGleich) . "<br>\n";
echo "Ergebnis Kleiner oder Gleich: " . intval($bool_ergebnisKleinerGleich) . "<br>\n";

// Datentypenvergleich
$bool_ergebnisGleichTyp = intval($int_zahl1 === $str_text);     // Gleichheitsvergleich mit Typ
$bool_ergebnisUngleichTyp = intval($int_zahl1 !== $str_text);   // Ungleichheitsvergleich mit Typ

echo "Ergebnis Gleich mit Typ: " . intval($bool_ergebnisGleichTyp) . "<br>\n";
echo "Ergebnis Ungleich mit Typ: " . intval($bool_ergebnisUngleichTyp) . "<br>\n";
?>


