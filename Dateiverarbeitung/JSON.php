<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>JSON Dateiverarbeitung</title>
</head>
<body>
<?php
    // json_encode($data, $options): Konvertiert ein PHP-Array oder Objekt in einen JSON-String.
    // Beispiel: json_encode($arr_neue_daten, JSON_PRETTY_PRINT);

    // json_decode($json, $assoc, $depth, $options): Dekodiert einen JSON-String und gibt das Ergebnis als PHP-Array oder Objekt zurück.
    // Beispiel: $arr_daten = json_decode($str_dateiinhalt, true);

    // file_get_contents($filename): Liest den Inhalt einer Datei und gibt ihn als String zurück.
    // Beispiel: $str_dateiinhalt = file_get_contents("daten.json");

    // file_put_contents($filename, $data): Schreibt den angegebenen Inhalt in eine Datei.
    // Beispiel: file_put_contents("neue_daten.json", $str_neue_daten);

    // array_filter($array, $callback): Filtert die Elemente eines Arrays basierend auf einer gegebenen Rückruffunktion.
    // Beispiel: $arr_gefilterte_daten = array_filter($arr_daten, function($item) use ($str_stadt) { ... });

    // usort($array, $callback): Sortiert ein Array unter Verwendung einer benutzerdefinierten Vergleichsfunktion.
    // Beispiel: usort($arr_sortierte_daten, function($a, $b) { ... });

    // foreach ($array as &$value) { ... }: Eine Schleife, die es ermöglicht, über die Elemente eines Arrays zu iterieren.
    // Beispiel: foreach ($arr_daten as &$datensatz) { ... };

    // unset($variable): Löscht eine angegebene Variable und gibt den belegten Speicherplatz frei.
    // Beispiel: unset($datensatz);

    // print_r($variable): Gibt eine menschenlesbare Darstellung des Inhalts einer Variable aus.
    // Beispiel: print_r($arr_daten);

    // Beispiel 1: JSON-Datei erstellen
    $arr_neue_daten = array(
        array(
          "name" => "Max Mustermann",
          "alter" => 25,
          "stadt" => "Berlin"
        ),
        array(
          "name" => "Anna Schmidt",
          "alter" => 30,
          "stadt" => "München"
        ),
        array(
          "name" => "Peter Müller",
          "alter" => 28,
          "stadt" => "Hamburg"
        )
      );
      
    $str_neue_daten = json_encode($arr_neue_daten, JSON_PRETTY_PRINT);
    file_put_contents("daten.json", $str_neue_daten);

    // Beispiel 2: JSON-Datei einlesen
    $str_dateiinhalt = file_get_contents("daten.json");
    $arr_daten = json_decode($str_dateiinhalt, true);

    // Beispiel 3: JSON-Daten anzeigen
    echo "<h2>Daten anzeigen:</h2>";
    echo "<pre>";
    print_r($arr_daten);
    echo "</pre>";

    // Beispiel 4: JSON-Daten filtern
    $str_stadt = "Berlin";
    $arr_gefilterte_daten = array_filter($arr_daten, function($item) use ($str_stadt) {
        return $item["stadt"] == $str_stadt;
    });

    // Beispiel 5: JSON-Daten sortieren
    $arr_sortierte_daten = $arr_daten;
    usort($arr_sortierte_daten, function($a, $b) {
        return $a["alter"] - $b["alter"];
    });

    // Beispiel 6: JSON-Daten aktualisieren
    $str_neuer_name = "Erika Musterfrau";
    $int_altergrenze = 25;
    foreach ($arr_daten as &$datensatz) {
        if ($datensatz["alter"] > $int_altergrenze) {
            $datensatz["name"] = $str_neuer_name;
        }
    }
    unset($datensatz); // Wichtig: Referenz freigeben

    // Beispiel 7: JSON-Daten hinzufügen
    $arr_neue_person = array(
        "name" => "Hans Müller",
        "alter" => 40,
        "stadt" => "Hamburg"
    );
    $arr_daten[] = $arr_neue_person;

    // Beispiel 8: JSON-Daten löschen
    $int_index_loeschen = 2;
    if (isset($arr_daten[$int_index_loeschen])) {
        unset($arr_daten[$int_index_loeschen]);
    }

    // Beispiel 9: JSON-Daten in HTML-Tabelle anzeigen
    echo "<h2>Daten in Tabelle anzeigen:</h2>";
    echo "<table>";
    echo "<tr><th>Name</th><th>Alter</th><th>Stadt</th></tr>";
    foreach ($arr_daten as $datensatz) {
        echo "<tr>";
        echo "<td>" . $datensatz["name"] . "</td>";
        echo "<td>" . $datensatz["alter"] . "</td>";
        echo "<td>" . $datensatz["stadt"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    // Beispiel 10: JSON-Daten speichern
    $str_aktualisierte_daten = json_encode($arr_daten, JSON_PRETTY_PRINT);
    file_put_contents("daten.json", $str_aktualisierte_daten);

    // Beispiel 11: JSON-Datei löschen
    $str_zu_loeschende_datei = "daten.json";
    unlink($str_zu_loeschende_datei);
    echo "Beispiel 11: JSON-Datei gelöscht<br>";

?>
</body>
</html>
