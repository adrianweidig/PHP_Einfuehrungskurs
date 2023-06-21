<?php
// HINWEIS: Kommentiere je nach Wunsch die entsprechende Funktion aus

// require: Verursacht einen fatalen Fehler (E_COMPILE_ERROR) und beendet das Skript,
// wenn die Datei nicht gefunden wird oder einen Fehler aufweist.
// Es ist nicht erlaubt, die gleiche Datei mehrmals einzubinden.

//require('..\Kursbibliotheken\HTMLWrapps.php');

// include: Zeigt eine Warnung (E_WARNING) an, wenn die Datei nicht gefunden wird oder einen Fehler aufweist,
// setzt jedoch die Ausführung des Skripts fort.
// Es ist erlaubt, die gleiche Datei mehrmals einzubinden.

include('..\Kursbibliotheken\HTMLWrapps.php'); 

// require_once: Verursacht einen fatalen Fehler (E_COMPILE_ERROR) und beendet das Skript,
// wenn die Datei nicht gefunden wird oder einen Fehler aufweist.
// Es ist nicht erlaubt, die gleiche Datei mehrmals einzubinden.
// Die Datei wird jedoch nur einmal eingebunden, auch wenn der Aufruf mehrmals erfolgt.

//require_once('..\Kursbibliotheken\HTMLWrapps.php');

// include_once: Zeigt eine Warnung (E_WARNING) an, wenn die Datei nicht gefunden wird oder einen Fehler aufweist,
// setzt jedoch die Ausführung des Skripts fort.
// Es ist erlaubt, die gleiche Datei mehrmals einzubinden.
// Die Datei wird jedoch nur einmal eingebunden, auch wenn der Aufruf mehrmals erfolgt.

include_once('..\Kursbibliotheken\HTMLWrapps.php');

// BEACHTE: Die obigen Funktionen können auch auf die Klammern verzichten. Z.B. include_once 'datei.php'
//          EBENFALLS ist es egal ob ' oder " verwendet wird.

// Übersicht:
/*
+-----------------+----------------+-----------------+
|    Funktion     |    Fehlerart   |   Mehrfach-     |
|                 |                |   einbindung    |
+-----------------+----------------+-----------------+
|     require     | Fataler Fehler |   Nicht erlaubt |
+-----------------+----------------+-----------------+
|     include     |   Warnung      |    Erlaubt      |
+-----------------+----------------+-----------------+
|  require_once   | Fataler Fehler |   Nicht erlaubt |
|   (einmalig)    |                |                 |
+-----------------+----------------+-----------------+
|  include_once   |   Warnung      |    Erlaubt      |
|   (einmalig)    |                |                 |
+-----------------+----------------+-----------------+
*/


$str_seiteTitel = "Meine Webseite";
$str_seiteInhalt = "Willkommen auf meiner Webseite!";
$arr_daten = array(
    array("Spalte 1", "Spalte 2", "Spalte 3"),
    array("Wert 1", "Wert 2", "Wert 3"),
    array("Wert 4", "Wert 5", "Wert 6")
);

generiereHeader($str_seiteTitel);
echo "<h1>$str_seiteTitel</h1>";
echo "<div>$str_seiteInhalt</div>";
generiereTabelle($arr_daten);
generiereFooter("© 2023 Meine Webseite");

?>
