<?php
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
