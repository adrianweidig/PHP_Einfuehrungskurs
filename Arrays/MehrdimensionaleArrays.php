<?php
// Mehrdimensionale Arrays in PHP
// Bezeichner von Arrays sind mit $InhaltDatentyp_arr__bezeichner beschrieben

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
foreach ($arr_arr_obstkorb as $str_arr_reihe) {
    foreach ($str_arr_reihe as $str_frucht) {
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

// Array-Elemente mit match abfragen und als String in Variable speichern
$str_frucht = "Kiwi";

$str_kategorie = match($str_frucht) {
    "Apfel", "Banane", "Orange" => "Obst",
    "Erdbeere", "Himbeere", "Blaubeere" => "Beere",
    "Kiwi", "Ananas", "Mango" => "Exotische Frucht",
    default => "Unbekannte Frucht"
};

echo "Die Frucht $str_frucht gehört zur Kategorie: $str_kategorie <br/>\n";

// Beispiel mit verschachtelter match-Anweisung
$str_frucht = "Erdbeere";
$str_frucht_farbe = "Rot";
$str_eigenschaft = match($str_frucht) {
    "Apfel" => match($str_frucht_farbe) {
        "Rot" => "Der Apfel ist rot",
        "Grün" => "Der Apfel ist grün",
        "Gelb" => "Der Apfel ist gelb",
        default => "Die Farbe von Apfel ist unbekannt"
    },
    "Banane" => match($str_frucht_farbe) {
        "Gelb" => "Die Banane ist gelb",
        "Grün" => "Die Banane ist noch nicht reif",
        default => "Die Farbe von Banane ist unbekannt"
    },
    "Erdbeere" => match($str_frucht_farbe) {
        "Rot" => "Die Erdbeere ist rot",
        "Weiß" => "Die Erdbeere ist weiß",
        default => "Die Farbe von Erdbeere ist unbekannt"
    },
    default => "Die Frucht ist unbekannt."
};

echo "Die Frucht $str_frucht hat folgende Eigenschaft: $str_eigenschaft";
?>
