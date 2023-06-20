<?php
// Beispiel 1: Aktuelles Datum
$dat_heute = date("d.m.Y");
echo "Heute ist der $dat_heute<br>";

// Beispiel 2: Aktuelle Uhrzeit
$dat_jetzt = date("H:i:s");
echo "Es ist jetzt $zeit_jetzt Uhr<br>";

// Beispiel 3: Datum und Uhrzeit in einem bestimmten Format
$dat_zeit = date("d.m.Y H:i:s");
echo "Das aktuelle Datum und die Uhrzeit sind: $dat_zeit<br>";

// Beispiel 4: Zeitstempel erzeugen
$int_zeitstempel = time();
echo "Der aktuelle Zeitstempel ist: $int_zeitstempel<br>";

// Beispiel 5: Datum und Uhrzeit aus Zeitstempel erzeugen
$int_zeitstempel = time();
$dat_zeitstempel = date("d.m.Y H:i:s", $int_zeitstempel);
echo "Der Zeitstempel $int_zeitstempel entspricht dem Datum und der Uhrzeit: $dat_zeitstempel<br>";

// Beispiel 6: Zeitpunkt in der Zukunft berechnen
$int_zeitstempel_zukunft = strtotime("+1 day");
$dat_zukunft = date("d.m.Y", $int_zeitstempel_zukunft);
echo "Ein Tag in der Zukunft ist der $dat_zukunft<br>";

// Beispiel 7: Zeitdifferenz berechnen
$dat_start = strtotime("2023-06-20 10:00:00");
$dat_ende = strtotime("2023-06-20 13:30:00");
$int_unterschied = $dat_ende - $dat_start;
$int_minuten = floor($int_unterschied / 60);
echo "Die Zeitdifferenz beträgt $int_minuten Minuten<br>";

// Beispiel 8: Wochentag ermitteln
$dat_heute = date("Y-m-d");
$str_wochentag = date("l", strtotime($dat_heute));
echo "Heute ist $str_wochentag<br>";

// Beispiel 9: Monatsname ermitteln
$str_monatsname = date("F");
echo "Der aktuelle Monat ist: $str_monatsname<br>";

// Beispiel 10: Jahreszahl ermitteln
$int_jahr = date("Y");
echo "Das aktuelle Jahr ist: $int_jahr<br>";

// Beispiel 11: Datum und Uhrzeit in einer anderen Zeitzone anzeigen
$zeitzone = new DateTimeZone("Europe/Berlin");
$datum_zeit = new DateTime("now", $zeitzone);
echo "Datum und Uhrzeit in Berlin: " . $datum_zeit->format("d.m.Y H:i:s") . "<br>";

// Beispiel 12: Prüfen, ob ein bestimmtes Jahr ein Schaltjahr ist
$int_jahr = 2024;
$bool_schaltjahr = date("L", mktime(0, 0, 0, 1, 1, $int_jahr)) == 1;
echo "Ist $int_jahr ein Schaltjahr? " . ($bool_schaltjahr ? "Ja" : "Nein") . "<br>";

// Beispiel 13: Anzahl der Tage in einem bestimmten Monat ermitteln
$int_monat = 9; // September
$int_jahr = 2023;
$int_anzahl_tage = cal_days_in_month(CAL_GREGORIAN, $int_monat, $int_jahr);
echo "Im Monat $int_monat des Jahres $int_jahr gibt es $int_anzahl_tage Tage<br>";

// Beispiel 14: Zeitzonen-Offset ermitteln
// Hinweis:
// Der :: in PHP wird als der sogenannte Scope-Resolution-Operator bezeichnet.
// Er wird verwendet, um auf statische Eigenschaften, Konstanten und Methoden einer Klasse zuzugreifen,
// ohne eine Instanz der Klasse zu erstellen.
// 
// Mit new ... wird ein neues Objekt der Klasse erzeugt
$zeitzone = new DateTimeZone("Europe/Berlin");
$datum_zeit = new DateTime("now", $zeitzone);
$int_offset = $zeitzone->getOffset($datum_zeit);
$int_offset_stunden = floor($int_offset / 3600);
$int_offset_minuten = ($int_offset % 3600) / 60;
echo "Die Zeitzone Europe/Berlin hat einen Offset von $int_offset_stunden Stunden und $int_offset_minuten Minuten zur UTC-Zeit<br>";

// Beispiel 15: Nächstes bestimmtes Datum ermitteln
$dat_heute = date("Y-m-d");
$dat_naechster_montag = date("Y-m-d", strtotime("next Monday", strtotime($dat_heute)));
echo "Das nächste Montagsdatum ist: $dat_naechster_montag<br>";

// Beispiel 16: Datum in einen anderen Formatierungsstil umwandeln
$dat_heute = date("Y-m-d");
$dat_umgewandelt = DateTime::createFromFormat("Y-m-d", $dat_heute)->format("d.m.Y");
echo "Das umgewandelte Datum ist: $dat_umgewandelt<br>";

// Beispiel 17: Vergleich von zwei Datumswerten
$dat_datum1 = "2023-06-20";
$dat_datum2 = "2023-06-21";
$int_vergleich = strcmp($dat_datum1, $dat_datum2);
echo "Der Vergleich der Daten ergibt: ";
if ($int_vergleich < 0) {
    echo "$dat_datum1 ist vor $dat_datum2<br>";
} elseif ($int_vergleich > 0) {
    echo "$dat_datum1 ist nach $dat_datum2<br>";
} else {
    echo "$dat_datum1 und $dat_datum2 sind gleich<br>";
}

// Beispiel 18: Alter aus Geburtsdatum berechnen
$dat_geburtsdatum = "1990-07-15";
$dat_heute = date("Y-m-d");
$int_alter = date_diff(date_create($dat_geburtsdatum), date_create($dat_heute))->y;
echo "Das Alter beträgt $int_alter Jahre<br>";

// Beispiel 19: Datum in UNIX-Zeitstempel umwandeln
$dat_zeitpunkt = "2023-06-20 10:00:00";
$int_zeitstempel = strtotime($dat_zeitpunkt);
echo "Der UNIX-Zeitstempel für $dat_zeitpunkt ist: $int_zeitstempel<br>";

// Beispiel 20: Datum in einem bestimmten Format parsen und ausgeben
$str_datum = "20.06.2023";
$dat_parsed = DateTime::createFromFormat("d.m.Y", $str_datum);
echo "Das geparste Datum ist: " . $dat_parsed->format("Y-m-d") . "<br>";
?>

