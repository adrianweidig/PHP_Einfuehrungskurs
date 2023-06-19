<?php
// Mehrdimensionale Arrays in PHP

// Mehrdimensionales Array erstellen und initialisieren
$arr_arr_obstkorb = array(
    array("Apfel", "Banane", "Orange"),
    array("Erdbeere", "Himbeere", "Blaubeere"),
    array("Kiwi", "Ananas", "Mango")
);

// Zugriff auf Array-Elemente
echo "Element in Zeile 1, Spalte 2 des Arrays: " . $arr_arr_obstkorb[1][2] . "<br>\n"; // Erwartete Ausgabe: Element in Zeile 1, Spalte 2 des Arrays: Blaubeere

// Array durchlaufen und ausgeben
echo "Alle Elemente des Arrays:<br>\n";
foreach ($arr_arr_obstkorb as $arr_str_reihe) {
    foreach ($arr_str_reihe as $str_frucht) {
        echo $str_frucht . "<br>\n";
    }
}

// Zugriff auf mehrdimensionales Array mit assoziativen Indizes
$arr_personen = array(
    "Peter" => array("Alter" => 30, "Beruf" => "Ingenieur"),
    "Anna" => array("Alter" => 25, "Beruf" => "Lehrerin"),
    "Max" => array("Alter" => 35, "Beruf" => "Designer")
);

echo "Alter von Peter: " . $arr_personen["Peter"]["Alter"] . "<br>\n"; // Erwartete Ausgabe: Alter von Peter: 30
echo "Beruf von Anna: " . $arr_personen["Anna"]["Beruf"] . "<br>\n"; // Erwartete Ausgabe: Beruf von Anna: Lehrerin

// Ausgabe des mehrdimensionalen Arrays mit print_r gibt eine menschenlesbare Darstellung eines Arrays aus
echo "Mehrdimensionales Array (obstkorb):<br>\n";
print_r($arr_arr_obstkorb); 

echo "Mehrdimensionales Array (personen):<br>\n";
print_r($arr_personen); 
?>
