<?php
session_start();

// Beispiel 1: Session ID ausgeben
$str_session_id = session_id();

echo "<h2>Beispiel 1: Session ID ausgeben</h2>";
echo "<p>Session ID: $str_session_id</p>";

// Beispiel 2: Session ID regenerieren
if (isset($_POST['regenerate'])) {
    session_regenerate_id();
    $str_session_id = session_id();
    echo "<p>Session ID wurde erfolgreich regeneriert.</p>";
}

echo "<h2>Beispiel 2: Session ID regenerieren</h2>";
echo "<form method='POST' action=''>";
echo "<input type='submit' name='regenerate' value='Regenerieren'>";
echo "</form>";

// Beispiel 3: Session ID löschen und neue Session starten
if (isset($_POST['restart'])) {
    session_unset();
    session_destroy();
    session_start();
    $str_session_id = session_id();
    echo "<p>Session wurde gelöscht und neu gestartet.</p>";
}

echo "<h2>Beispiel 3: Session ID löschen und neue Session starten</h2>";
echo "<form method='POST' action=''>";
echo "<input type='submit' name='restart' value='Neu starten'>";
echo "</form>";

// Beispiel 4: Überprüfen, ob eine Session ID vorhanden ist
if (empty($str_session_id)) {
    echo "<h2>Beispiel 4: Überprüfen, ob eine Session ID vorhanden ist</h2>";
    echo "<p>Es wurde keine Session ID erstellt.</p>";
} else {
    echo "<h2>Beispiel 4: Überprüfen, ob eine Session ID vorhanden ist</h2>";
    echo "<p>Es wurde eine Session ID erstellt: $str_session_id</p>";
}

// Beispiel 5: Session ID in einer Formularaktion übertragen
if (isset($_POST['submit'])) {
    $str_session_id = $_POST['session_id'];
    echo "<h2>Beispiel 5: Session ID in einer Formularaktion übertragen</h2>";
    echo "<p>Übertragene Session ID: $str_session_id</p>";
}

echo "<h2>Beispiel 5: Session ID in einer Formularaktion übertragen</h2>";
echo "<form method='POST' action=''>";
echo "<input type='text' name='session_id' placeholder='Session ID eingeben' required>";
echo "<input type='submit' name='submit' value='Übertragen'>";
echo "</form>";
?>
