<?php
// Arrays und Strings in PHP mit assoziativen Indizes
// Bezeichner von Arrays sind mit $arr_InhaltDatentyp_bezeichner beschrieben

// Array erstellen und initialisieren
$str_arr_obst = array(
    "a" => "Apfel",
    "b" => "Banane",
    "o" => "Orange"
);

// Zugriff auf Array-Elemente mit assoziativen Indizes
echo "Element mit Index 'a': " . $str_arr_obst["a"] . "<br>\n"; // Erwartete Ausgabe: Element mit Index 'a': Apfel

// Array durchlaufen und ausgeben
// Zugriff über foreach via: foreach(array as index => inhalt)
echo "Alle Elemente des Arrays:<br>\n";
foreach ($str_arr_obst as $index => $str_frucht) {
    echo "Index: " . $index . ", Frucht: " . $str_frucht . "<br>\n";
}

// Array erweitern
$str_arr_obst["e"] = "Erdbeere";
echo "Nach der Erweiterung des Arrays:<br>\n";
foreach ($str_arr_obst as $index => $str_frucht) {
    echo "Index: " . $index . ", Frucht: " . $str_frucht . "<br>\n";
}

// Länge des Arrays ermitteln
$int_anzahl = count($str_arr_obst);
echo "Anzahl der Elemente im Array: " . $int_anzahl . "<br>\n";

// Array-Elemente mit match abfragen und als String in Variable speichern

// Der match-Ausdruck ermöglicht das Vergleichen eines Ausdrucks mit verschiedenen
// Übereinstimmungsmustern. Dabei wird das erste Muster gesucht, das mit dem Ausdruck
// übereinstimmt, und der entsprechende Ergebniswert wird zurückgegeben.
// Die Muster werden mit dem `=>` Operator vom Ergebniswert getrennt.
// Wenn kein Muster übereinstimmt, kann ein Standardmuster mit `default => Wert`
// angegeben werden, das verwendet wird, wenn keine Übereinstimmung gefunden wird.

$str_fruchtart = match($str_arr_obst["a"]) {
    "Apfel" => "Obst-Apfel",                 // Wenn $str_arr_obst["a"] == "Apfel"
    "Banane" => "Obst-Banane",               // Wenn $str_arr_obst["a"] == "Banane"
    "Orange" => "Obst-Orange",               // Wenn $str_arr_obst["a"] == "Orange"
    default => "Unbekannt"                   // Andernfalls, wenn kein Match gefunden wurde,
};

// Ausgabe
echo "Frucht mit Index 'a' ist: " . $str_fruchtart . "<br>\n";
?>
