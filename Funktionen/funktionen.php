<?php
// Funktionen in PHP

// Beispiel 1: Einfache Funktion ohne Parameter und Rückgabewert
function sagHallo() {
    echo "Hallo Welt!<br>\n";
}

// Beispiel 2: Funktion mit Parametern und Rückgabewert
function addiereZahlen($int_a, $int_b) {
    $int_summe = $int_a + $int_b;
    return $int_summe;
}

// Beispiel 3: Funktion mit Standardparameter
function gruessePerson($str_name = "Gast") {
    echo "Hallo, $str_name!<br>\n";
}

// Beispiel 4: Funktion mit variabler Anzahl an Parametern
function berechneSumme() {
    $int_summe = 0;
    $arr_argumente = func_get_args(); // Funktion zum Abrufen der übergebenen Argumente
    echo "Anzahl übergebener Parameter: " . count($arr_argumente) . "<br/>\n";
    foreach ($arr_argumente as $int_zahl) {
        $int_summe += $int_zahl;
    }
    return $int_summe;
}

// Beispiel 5: Rekursive Funktion
function fakultaet($int_n) {
    if ($int_n <= 1) {
        return 1;
    }
    return $int_n * fakultaet($int_n - 1);
}

// Ausgabe

echo "Beispiel 1: Einfache Funktion ohne Parameter und Rückgabewert<br>\n";
sagHallo();
echo "<br>\n----------------------------<br>\n";

echo "Beispiel 2: Funktion mit Parametern und Rückgabewert<br>\n";
$int_ergebnis = addiereZahlen(5, 3);
echo "Die Summe ist: $int_ergebnis<br>\n";
echo "<br>\n----------------------------<br>\n";

echo "Beispiel 3: Funktion mit Standardparameter<br>\n";
gruessePerson("John");
gruessePerson(); // Standardparameter wird verwendet
echo "<br>\n----------------------------<br>\n";

echo "Beispiel 4: Funktion mit variabler Anzahl an Parametern<br>\n";
$int_summe1 = berechneSumme(2, 3, 4);
$int_summe2 = berechneSumme(5, 6, 2, 10);
echo "Summe 1: $int_summe1<br>\n";
echo "Summe 2: $int_summe2<br>\n";
echo "<br>\n----------------------------<br>\n";

echo "Beispiel 5: Rekursive Funktion<br>\n";
$int_fakultaet = fakultaet(5);
echo "Die Fakultät von 5 ist: $int_fakultaet<br>\n";
echo "<br>\n----------------------------<br>\n";

// Beispiel 6: Funktion mit mehreren Rückgabewerten
function berechneWerte($int_zahl1, $int_zahl2) {
    $int_summe = $int_zahl1 + $int_zahl2;
    $int_differenz = $int_zahl1 - $int_zahl2;
    $int_produkt = $int_zahl1 * $int_zahl2;
    
    return array($int_summe, $int_differenz, $int_produkt);
}

// Aufruf der Funktion und Speichern der Rückgabewerte in separaten Variablen
list($int_ergebnisSumme, $int_ergebnisDifferenz, $int_ergebnisProdukt) = berechneWerte(1, 2);

// Verwendung der zurückgegebenen Werte
echo "Beispiel 6: Funktion mit mehreren Rückgabewerten<br>\n";
echo "Die Summe ist: $int_ergebnisSumme<br>\n";
echo "Die Differenz ist: $int_ergebnisDifferenz<br>\n";
echo "Das Produkt ist: $int_ergebnisProdukt<br>\n";
?>
