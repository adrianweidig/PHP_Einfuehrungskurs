<?php
// Verzweigungen in PHP

// Deklaration und Initialisierung von Variablen
$int_zahl = 10; 

// if-Verzweigung
if ($int_zahl > 0) { // Bedingung
    echo "Die Zahl ist positiv.<br>\n"; // Ausgabe, wenn wahr
} elseif ($int_zahl < 0) { // Bedingung
    echo "Die Zahl ist negativ.<br>\n"; // Ausgabe, wenn die erste Bedingung falsch und die zweite Bedingung wahr
} else {
    echo "Die Zahl ist null.<br>\n"; // Ausgabe, wenn keine der vorherigen Bedingungen erfüllt ist
}

// switch-Verzweigung
$str_tag = "Montag"; // Deklaration einer String-Variablen mit dem Wert "Montag"

switch ($str_tag) { // Überprüfung des Werts der Variable $str_tag
    case "Montag": // wenn $str_tag == "Montag"
        echo "Heute ist Montag.<br>\n"; // Ausgabe, wenn wahr
        break; // Beenden der switch-Verzweigung
    case "Dienstag": // wenn $str_tag == "Dienstag"
        echo "Heute ist Dienstag.<br>\n"; // Ausgabe, wenn wahr
        break; // Beenden der switch-Verzweigung
    case "Mittwoch": // wenn $str_tag == "Mittwoch"
        echo "Heute ist Mittwoch.<br>\n"; // Ausgabe, wenn wahr
        break; // Beenden der switch-Verzweigung
    default: // wenn keiner der vorherigen Fälle zutrifft
        echo "Heute ist ein anderer Tag.<br>\n"; // Ausgabe, wenn kein Fall erfüllt ist
}

// Beachte:
// break; ist kein muss. Wenn break nicht angegeben wird wird der
// darunterliegende Code (auch andere case Fälle) weiter ausgeführt
// bis das switch-statement zu Ende ist oder ein break; kommt.

// ternärer Operator
$int_alter = 25; // Deklaration einer Integer-Variablen mit dem Wert 25
$str_ausweis = ($int_alter >= 18) ? "Du hast einen Ausweis." : "Du hast keinen Ausweis.";
// Bedingter Ausdruck (ternärer Operator): Wenn $int_alter größer oder gleich 18 ist, wird der erste Ausdruck ausgeführt, sonst der zweite
echo $str_ausweis . "<br>\n"; // Ausgabe des Wertes der Variable $str_ausweis
?>
