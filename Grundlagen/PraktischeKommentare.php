<?php
// Dies ist ein einzeiliger Kommentar.
echo "Hello, World!"; // Dieser Kommentar erklärt den Zweck der Ausgabe.

/*
Dies ist ein mehrzeiliger Kommentar.
Er erstreckt sich über mehrere Zeilen.
Nützliche Informationen können hier bereitgestellt werden.
Zum Beispiel eine kurze Beschreibung des Codes oder Erklärungen zu bestimmten Funktionen.
*/

// Warum sind Kommentare praktisch?

// 1. Dokumentation: Kommentare können den Code erklären und dokumentieren, was anderen Entwicklern hilft, den Code zu verstehen.

// 2. Debugging: Kommentare können verwendet werden, um vorübergehend Code auszukommentieren, um Fehler zu isolieren oder zu debuggen.

// 3. Zusammenarbeit: Kommentare ermöglichen eine bessere Zusammenarbeit im Team, da sie Informationen über den Code liefern.

// 4. Wartung: Durch Kommentare kann der Code leichter gewartet und aktualisiert werden, da Entwickler den Zweck und die Funktionen verstehen.

// 5. Lesbarkeit: Gut platzierte Kommentare erhöhen die Lesbarkeit des Codes und erleichtern anderen das Verständnis.

// Beispiel für eine Funktion mit Kommentaren:

/**
 * Diese Funktion addiert zwei Zahlen.
 *
 * @param int $a Die erste Zahl.
 * @param int $b Die zweite Zahl.
 * @return int Die Summe der beiden Zahlen.
 */
function addNumbers($a, $b) {
    // Führt die Addition durch
    $sum = $a + $b;

    // Gibt die Summe zurück
    return $sum;
}

// Verwendung der Funktion
$result = addNumbers(5, 10);
echo "Das Ergebnis ist: " . $result;
?>
