<?php
// Ganzzahlige Addition
$int_summe = 10 + 5;
echo "Die Summe von 10 und 5 ist: $int_summe<br>\n";

// Ganzzahlige Subtraktion
$int_differenz = 20 - 8;
echo "Die Differenz von 20 und 8 ist: $int_differenz<br>\n";

// Ganzzahlige Multiplikation
$int_produkt = 6 * 4;
echo "Das Produkt von 6 und 4 ist: $int_produkt<br>\n";

// Gleitkommazahlige Division
$float_quotient = 25 / 5;
echo "Der Quotient von 25 durch 5 ist: $float_quotient<br>\n";

// Ganzzahliger Modulo (Restwert)
$int_rest = 15 % 4;
echo "Der Restwert von 15 modulo 4 ist: $int_rest<br>\n";

// Ganzzahlige Potenzierung
$int_potenz = pow(2, 3);
echo "2 hoch 3 ist: $int_potenz<br>\n";

// Gleitkommazahlige Quadratwurzel
$float_wurzel = sqrt(16);
echo "Die Quadratwurzel von 16 ist: $float_wurzel<br>\n";

// Ganzzahliger absoluter Wert
$int_absolut = abs(-10);
echo "Der absolute Wert von -10 ist: $int_absolut<br>\n";

// Ganzzahliges Runden
$int_gerundet = round(3.7);
echo "Die Rundung von 3.7 ist: $int_gerundet<br>\n";

// Gleitkommazahliges Runden mit Nachkommastellen
$float_gerundetNachkommastellen = round(3.14159, 2);
echo "Die Rundung von 3.14159 auf 2 Nachkommastellen ist: $float_gerundetNachkommastellen<br>\n";

// Ganzzahlige Division
$int_ganzzahlDiv = intdiv(20, 6);
echo "Die ganzzahlige Division von 20 durch 6 ist: $int_ganzzahlDiv<br>\n";

// Minimum- und Maximum-Werte
$int_minWert = min(4, 8, 2, 6);
$int_maxWert = max(4, 8, 2, 6);
echo "Der kleinste Wert ist: $int_minWert<br>\n";
echo "Der größte Wert ist: $int_maxWert<br>\n";

// Zufällige ganze Zahl zwischen 1 und 100
$int_zufall = rand(1, 100);
echo "Eine zufällige Zahl zwischen 1 und 100: $int_zufall<br>\n";

// Zufällige Gleitkommazahl zwischen 0 und 1
$float_zufallsGleitkommazahl = rand() / getrandmax();
echo "Eine zufällige Gleitkommazahl zwischen 0 und 1: $float_zufallsGleitkommazahl<br>\n";

// Natürlicher Logarithmus
$float_logarithmusNatuerlich = log(10);
echo "Der natürliche Logarithmus von 10 ist: $float_logarithmusNatuerlich<br>\n";

// Logarithmus zur Basis 10
$float_logarithmusBasis10 = log10(100);
echo "Der Logarithmus zur Basis 10 von 100 ist: $float_logarithmusBasis10<br>\n";

// Trigonometrische Funktionen
$int_winkel = 30; // in Grad
$float_sinus = sin(deg2rad($int_winkel));
$float_cosinus = cos(deg2rad($int_winkel));
$float_tangens = tan(deg2rad($int_winkel));
echo "Der Sinus von $int_winkel Grad ist: $float_sinus<br>\n";
echo "Der Cosinus von $int_winkel Grad ist: $float_cosinus<br>\n";
echo "Der Tangens von $int_winkel Grad ist: $float_tangens<br>\n";

// Aufruf von ceil und floor
$float_zahl = 3.8;
$float_gerundetOben = ceil($float_zahl);
$float_gerundetUnten = floor($float_zahl);
echo "Die Zahl $float_zahl aufgerundet ergibt: $float_gerundetOben<br>\n";
echo "Die Zahl $float_zahl abgerundet ergibt: $float_gerundetUnten<br>\n";
?>
