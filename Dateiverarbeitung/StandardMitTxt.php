<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dateiverarbeitung - Textdatei</title>
</head>
<body>
<?php
    // Beispiel 1: Textdatei erstellen
    $str_neuer_inhalt = "Dies ist der neue Inhalt der Datei.";
    file_put_contents("datei.txt", $str_neuer_inhalt);
    echo "Beispiel 1: Textdatei erstellt<br>";

    // Beispiel 2: Textdatei einlesen
    $str_dateiinhalt = file_get_contents("datei.txt");
    echo "Beispiel 2: Textdatei eingelesen<br>";

    // Beispiel 3: Zeilen zählen
    $arr_dateiinhalt = file("datei.txt");
    $int_anzahl_zeilen = count($arr_dateiinhalt);
    echo "Beispiel 3: Anzahl der Zeilen: " . $int_anzahl_zeilen . "<br>";

    // Beispiel 4: Zeilen in Array speichern
    $arr_zeilen = file("datei.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    echo "Beispiel 4: Zeilen in Array gespeichert<br>";

    // Beispiel 5: Eine bestimmte Zeile auslesen
    $int_zeilennummer = 1; // Beispiel: Zeile 1 auslesen
    $str_zeile = $arr_zeilen[$int_zeilennummer - 1];
    echo "Beispiel 5: Inhalt der Zeile $int_zeilennummer: $str_zeile<br>";

    // Beispiel 6: Textdatei durchsuchen
    $str_suchbegriff = "Lorem"; // Beispiel: Nach dem Begriff "Lorem" suchen
    $arr_treffer = preg_grep("/$str_suchbegriff/i", $arr_zeilen);
    echo "Beispiel 6: Treffer des Suchbegriffs '$str_suchbegriff':<br>";
    foreach ($arr_treffer as $treffer) {
        echo "- $treffer<br>";
    }

    // Beispiel 7: Textdatei bearbeiten
    $str_alter_begriff = "sit";
    $str_neuer_begriff = "XXXX";
    $str_bearbeiteter_inhalt = str_replace($str_alter_begriff, $str_neuer_begriff, $str_dateiinhalt);
    echo "Beispiel 7: Textdatei bearbeitet<br>";

    // Beispiel 8: Textdatei anhängen
    $str_neuer_text = "\nDieser Text wird an die Datei angehängt.";
    file_put_contents("datei.txt", $str_neuer_text, FILE_APPEND);
    echo "Beispiel 8: Text an Datei angehängt<br>";

    // Beispiel 9: Textdatei umbenennen
    $str_alter_dateiname = "datei.txt";
    $str_neuer_dateiname = "umbenannte_datei.txt";
    rename($str_alter_dateiname, $str_neuer_dateiname);
    echo "Beispiel 9: Datei umbenannt in '$str_neuer_dateiname'<br>";

    // Beispiel 10: Textdatei löschen
    // Auskommentieren, falls die Datei erhalten bleiben soll
    $str_zu_loeschende_datei = "umbenannte_datei.txt";
    unlink($str_zu_loeschende_datei);
    echo "Beispiel 10: Datei gelöscht<br>";
?>
</body>
</html>
