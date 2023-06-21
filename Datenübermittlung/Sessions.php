<?php

// Die Verwendung von Session-Variablen erfordert das Neuladen der Seite, um Änderungen sichtbar zu machen.
// Die Session-Daten werden serverseitig gespeichert und anhand der Session-ID abgerufen.
// Wenn eine Session-Variable geändert wird, wird der neue Wert auf dem Server gespeichert.
// Beim Neuladen der Seite werden die aktuellen Session-Daten anhand der Session-ID abgerufen und verwendet.
// Das Neuladen der Seite ermöglicht es dem Browser, eine neue Anfrage an den Server zu senden und die aktuellen Session-Daten zu erhalten.
// Die Session-ID wird über einen Cookie oder als Teil der URL übertragen, um die Sitzung zu identifizieren.
// Durch das Neuladen der Seite wird sichergestellt, dass der Browser die aktuelle Session-ID verwendet und die aktualisierten Session-Daten erhält.
// PHP bietet keine automatische Aktualisierung der Seite bei Änderungen der Session-Daten.
// Das Neuladen der Seite ist der Mechanismus, um die aktuellen Session-Daten abzurufen und anzuzeigen.


session_start();

// Beispiel 1: Session-Variable setzen, falls nicht bereits gesetzt
if (!isset($_SESSION['str_text'])) {
    $_SESSION['str_text'] = 'Hallo, dies ist eine Session-Variable vom Typ String.';
}
if (!isset($_SESSION['int_zahl'])) {
    $_SESSION['int_zahl'] = 42;
}

// Beispiel 2: Session-Variable ausgeben
$str_text = $_SESSION['str_text'];
$int_zahl = $_SESSION['int_zahl'];

echo "<h2>Beispiel 2: Session-Variable ausgeben</h2>";
echo "<p>String: $str_text</p>";
echo "<p>Zahl: $int_zahl</p>";

// Beispiel 3: Session-Variable prüfen und verändern
if (isset($_SESSION['int_counter'])) {
    $_SESSION['int_counter']++;
} else {
    $_SESSION['int_counter'] = 1;
}

$int_counter = $_SESSION['int_counter'];

echo "<h2>Beispiel 3: Session-Variable prüfen und verändern</h2>";
echo "<p>Counter: $int_counter</p>";

// Beispiel 4: Session beenden und Daten löschen
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: ".$_SERVER['PHP_SELF']); // Aktualisiere die Seite
    die(); // Beende das Skript (Keine Weiterverarbeitung nachstehenden Codes)
}

echo "<h2>Beispiel 4: Session beenden und Daten löschen</h2>";
echo "<form method='POST' action=''>";
echo "<input type='submit' name='logout' value='Logout'>";
echo "</form>";

// Beispiel 5: Session-Variable mit Formular aktualisieren
if (isset($_POST['update'])) {
    $_SESSION['str_text'] = $_POST['neuer_text'];
    $_SESSION['int_zahl'] = $_POST['neue_zahl'];
    header("Location: ".$_SERVER['PHP_SELF']); // Aktualisiere die Seite
    die(); // Beende das Skript (Keine Weiterverarbeitung nachstehenden Codes)
}

echo "<h2>Beispiel 5: Session-Variable mit Formular aktualisieren</h2>";
echo "<form method='POST' action=''>";
echo "<input type='text' name='neuer_text' placeholder='Neuer Text' required>";
echo "<input type='number' name='neue_zahl' placeholder='Neue Zahl' required>";
echo "<input type='submit' name='update' value='Aktualisieren'>";
echo "</form>";
?>
