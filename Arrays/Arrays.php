<?php
// Arrays und Strings in PHP mit assoziativen Indizes
// Bezeichner von Arrays sind mit $arr_InhaltDatentyp_bezeichner beschrieben

// Array erstellen und initialisieren
$arr_str_obst = array(
    "a" => "Apfel",
    "b" => "Banane",
    "o" => "Orange"
);

// Zugriff auf Array-Elemente mit assoziativen Indizes
echo "Element mit Index 'a': " . $arr_str_obst["a"] . "<br>\n"; // Erwartete Ausgabe: Element mit Index 'a': Apfel

// Array durchlaufen und ausgeben
// Zugriff über foreach via: foreach(array as index => inhalt) wobei auf =>
// verzichtet wird, wenn keine assoziativen Indizes genutzt werden.
echo "Alle Elemente des Arrays:<br>\n";
foreach ($arr_str_obst as $index => $str_frucht) {
    echo "Index: " . $index . ", Frucht: " . $str_frucht . "<br>\n";
}

// Array erweitern
$arr_str_obst["e"] = "Erdbeere";
echo "Nach der Erweiterung des Arrays:<br>\n";
foreach ($arr_str_obst as $index => $str_frucht) {
    echo "Index: " . $index . ", Frucht: " . $str_frucht . "<br>\n";
}

// Länge des Arrays ermitteln
$int_anzahl = count($arr_str_obst);
echo "Anzahl der Elemente im Array: " . $int_anzahl . "<br>\n";
?>
